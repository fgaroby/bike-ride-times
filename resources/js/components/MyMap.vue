<template>
    <l-map
        id="myMap"
        ref="myMap"
        style="height: 100%; width: 100%"
        :zoom="zoom"
        :center="center"
        @ready="loadMarkers()">
        <l-tile-layer
            :url="url"
            :attribution="attribution">
        </l-tile-layer>
        <l-marker v-for="marker in markers"
            :key="'marker_' + marker.id"
            :latLng="marker.latLng">
        </l-marker>
        <l-polyline v-for="path in paths"
            :key="'path_' + path.id"
            :latLngs="path.latLngs"
            :color="path.color">
        </l-polyline>
    </l-map>
</template>

<script>
// If you need to reference 'L', such as in 'L.icon', then be sure to
// explicitly import 'leaflet' into your component
import Axios from 'axios';
import { latLng } from "leaflet";
import { LMap, LMarker, LPolyline, LTileLayer } from 'vue2-leaflet';

export default {
  name: 'MyMap',
  components: {
    LMap,
    LMarker,
    LPolyline,
    LTileLayer,
  },
  data() {
      return {
          zoom: 13,
          center: latLng(49.18222, -0.37056),
          url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
          markers: [],
          paths: [],
      }
  },
  methods: {
      loadMarkers() {
          Axios.get('/api/markers')
               .then((response) => {
                   response.data.data.forEach(marker => {
                       this.markers.push({
                           id: marker.id,
                           latLng: [marker.latitude, marker.longitude],
                       });

                       marker.paths.forEach(path => {
                           this.paths.push({
                               id: path.id,
                               latLngs: JSON.parse(path.latLngs),
                               color: path.color,
                           });
                       });
                   });
               });
      }
  }
};
</script>
