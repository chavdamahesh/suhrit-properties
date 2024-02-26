<template>
  <div class="createPost-container">
    <el-form ref="postForm" :model="postForm" :rules="rules" class="form-container">
      <sticky :class-name="'sub-navbar '+postForm.status">
        <el-button
          v-loading="loading"
          style="margin-left: 10px;"
          type="success"
          @click="submitForm"
        >
          Submit
        </el-button>
      </sticky>

      <div class="createPost-main-container" style="margin-top: 40px;">
        <el-row>
          <el-col :span="6">
            <el-form-item style="margin-bottom: 20px;" prop="active">
              <el-checkbox v-model="postForm.active" :true-label="1" :false-label="0" label="1" name="active">Active</el-checkbox>
            </el-form-item>
            <el-form-item style="margin-bottom: 20px;" prop="featured">
              <el-checkbox v-model="postForm.featured" :true-label="1" :false-label="0" label="1" name="featured">Featured</el-checkbox>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="For">
              <el-select v-model="postForm.contract" placeholder="For" name="contract">
                <el-option label="Sale" value="sale" />
                <el-option label="Rent" value="rent" />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="Type">
              <el-select v-model="postForm.type" placeholder="Type" name="type">
                <el-option label="Plot" value="Plot" />
                <el-option label="House" value="House" />
                <el-option label="Apartment" value="Apartment" />
                <el-option label="Commercial" value="Commercial" />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <LocationList v-model="postForm.location_id" value="postForm.location_id" @catchLocation="onLocationChange" />
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="24">
            <el-row>
              <el-col :span="12">
                <el-form-item style="margin-bottom: 20px; padding:7px" label="Property Name" prop="name">
                  <el-input v-model="postForm.name_eng" :maxlength="100" name="nameEng" required />
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item style="margin-bottom: 20px; padding:7px" label="Property Name French" prop="name">
                  <el-input v-model="postForm.name_fre" :maxlength="100" name="nameFre" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Short Description English" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.shortdesceng" type="textarea" />
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Short Description French" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.shortdescfre" type="textarea" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="price" label="Price">
                  <el-input v-model="postForm.price" :maxlength="100" name="price" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="floor" label="Floor">
                  <el-input v-model="postForm.floor" :maxlength="100" name="floor" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="total_area_int" label="Interior Area">
                  <el-input v-model="postForm.total_area_int" :maxlength="100" name="total_area_int" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="total_area_ext" label="Exterior Area">
                  <el-input v-model="postForm.total_area_ext" :maxlength="100" name="total_area_ext" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="year_built" label="Year Buit">
                  <el-input v-model="postForm.year_built" :maxlength="100" name="year_built" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="garage_no" label="No. Garages">
                  <el-input v-model="postForm.garage_no" :maxlength="100" name="garage_no" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="no_bath" label="No. Bathrooms">
                  <el-input v-model="postForm.no_bath" :maxlength="100" name="no_bath" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="no_bedrooms" label="No. Beadrooms">
                  <el-input v-model="postForm.no_bedrooms" :maxlength="100" name="no_bedrooms" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="4">
                <el-form-item label="Orientation">
                  <el-select v-model="postForm.orientation" placeholder="Orientation" name="type">
                    <el-option label="North" value="N" />
                    <el-option label="Northeast" value="NE" />
                    <el-option label="Northwest" value="NW" />
                    <el-option label="East" value="East" />
                    <el-option label="South" value="South" />
                    <el-option label="Southeast" value="Southeast" />
                    <el-option label="Southwest" value="Southwest" />
                    <el-option label="West" value="West" />
                  </el-select>
                </el-form-item>
              </el-col>
              <el-col :span="2">&nbsp;</el-col>
              <el-col :span="5">
                <el-form-item label="Garden / Terrace Orientation">
                  <el-select v-model="postForm.garden_terrace_orientation" placeholder="Garden / Terrace Orientation" name="type">
                    <el-option label="North" value="N" />
                    <el-option label="Northeast" value="NE" />
                    <el-option label="Northwest" value="NW" />
                    <el-option label="East" value="East" />
                    <el-option label="South" value="South" />
                    <el-option label="Southeast" value="Southeast" />
                    <el-option label="Southwest" value="Southwest" />
                    <el-option label="West" value="West" />
                  </el-select>
                </el-form-item>
              </el-col>
              <el-col :span="4">
                <el-form-item label="Charges">
                  <el-input v-model="postForm.charges" :maxlength="100" name="charges" required />
                </el-form-item>
              </el-col>
              <el-col :span="2">&nbsp;</el-col>
              <el-col :span="4">
                <el-form-item label="Energy Efficiency">
                  <el-input v-model="postForm.energy_efficiency" :maxlength="100" name="energy_efficiency" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="year_reno" label="Year Renovated">
                  <el-input v-model="postForm.year_reno" :maxlength="100" name="year_reno" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="no_outdoor_parking_spots" label="No. of Outdoor parking spots">
                  <el-input v-model="postForm.no_outdoor_parking_spots" :maxlength="100" name="no_outdoor_parking_spots" required />
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item style="margin-bottom: 20px; padding:7px" prop="kitchen_type" label="Kitchen Type">
                  <el-input v-model="postForm.kitchen_type" :maxlength="100" name="kitchen_type" required />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="24">
                <el-form-item label="Options"><br>
                  <el-checkbox v-model="postForm.lift" :true-label="1" :false-label="0" label="1" name="lift">Lift</el-checkbox>
                  <el-checkbox v-model="postForm.security_door" :true-label="1" :false-label="0" name="security_door" value="1">Security Door</el-checkbox>
                  <el-checkbox v-model="postForm.double_glazing" :true-label="1" :false-label="0" name="double_glazing" value="1">Double Glazing</el-checkbox>
                  <el-checkbox v-model="postForm.garage" :true-label="1" :false-label="0" name="garage" value="1">Garage</el-checkbox>
                  <el-checkbox v-model="postForm.garden" :true-label="1" :false-label="0" name="garden" value="1">Garden</el-checkbox>
                  <el-checkbox v-model="postForm.parking" :true-label="1" :false-label="0" name="parking" value="1">Parking</el-checkbox>
                  <el-checkbox v-model="postForm.terrase" :true-label="1" :false-label="0" name="terrase" value="1">Terrase</el-checkbox>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Key Feature 1: English" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature1eng" type="textarea" />
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Key Feature 1: French" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature1fre" type="textarea" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Key Feature 2: English" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature2eng" type="textarea" />
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Key Feature 2: French" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature2fre" type="textarea" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="12">
                <el-form-item label="Key Feature 3: English" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature3eng" name="key_feature_3_eng" type="textarea" />
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Key Feature 3: French" style="margin-bottom: 20px; padding:7px">
                  <el-input v-model="postForm.keyfeature3fre" name="key_feature_3_fre" type="textarea" />
                </el-form-item>
              </el-col>
            </el-row>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="Address" style="margin-bottom: 20px; padding:7px">
              <el-input v-model="postForm.address" name="address" type="textarea" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="image_uri" style="margin-bottom: 30px;">
              <media-library v-model="postForm.property" :file-list="postForm.images" :upload-url="'/api/property/upload'" :model="'Property'" :model-id="postForm.id" @input="setFileList" />
            </el-form-item>
          </el-col>
          <el-col :span="24">
            <gmap-autocomplete
              id="map"
              ref="toAddress"
              classname="form-control"
              placeholder="Start typing address"
              country="us"
              style="width: 40%"
              @place_changed="getAddressData"
            />
            <google-map :center="mapCenter" :zoom="12" style="width: 100%; height: 500px">
              <ground-overlay
                source="//xkjyeah.github.io/vue-google-maps/overlay.png"
                :bounds="{
                  north: 1.502,
                  south: 1.185,
                  east: 104.0262,
                  west: 103.5998,
                }"
                :opacity="0.5"
              />
              <google-marker v-for="m in markers" :key="m.position" :position="m.position" :clickable="true" :draggable="true" :volatility="true" @drag="updateCoordinates" @click="center=m.position" />
            </google-map>
          </el-col>
        </el-row>
      </div>
    </el-form>
  </div>
</template>

<script>
import Vue from 'vue';
import MediaLibrary from '@/components/MediaLibrary';
import Sticky from '@/components/Sticky'; // Sticky header
import { fetchProperty, createProperty, updateProperty } from '@/api/property';
import { LocationList } from './Dropdown';
import * as VueGoogleMaps from 'vue2-google-maps';

const defaultForm = {
  status: 'draft',
  name: '',
  contract: '',
  type: '',
  location_id: '',
  translations: [],
  images: [],
  price: '',
  floor: '',
  total_area_int: '',
  total_area_ext: '',
  year_built: '',
  garage_no: '',
  no_bath: '',
  no_bedrooms: '',
  year_reno: '',
  no_outdoor_parking_spots: '',
  kitchen_type: '',
  orientation: '',
  garden_terrace_orientation: '',
  charges: '',
  energy_efficiency: '',
  lift: '',
  security_door: '',
  double_glazing: '',
  garage: '',
  garden: '',
  parking: '',
  terrase: '',
  newLocation: '',
  key_feature_1: '',
  key_feature_2: '',
  key_feature_3: '',
  source_uri: '',
  image_uri: '',
  resource: '',
  display_time: undefined,
  active: '',
  featured: '',
  name_eng: '',
  name_fre: '',
  shortdesceng: '',
  shortdescfre: '',
  keyfeature1eng: '',
  keyfeature1fre: '',
  keyfeature2eng: '',
  keyfeature2fre: '',
  keyfeature3eng: '',
  keyfeature3fre: '',
  address: '',
};

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyBw2hGYE25AKiiCS8lU_84HOJlEdJ-6PBM',
    libraries: 'places',
  },
  // Demonstrating how we can customize the name of the components
  installComponents: false,
});

Vue.component('gmap-autocomplete', VueGoogleMaps.Autocomplete);
Vue.component('google-marker', VueGoogleMaps.Marker);
Vue.component('google-map', VueGoogleMaps.Map);
Vue.component('ground-overlay', Vue.extend({
  mixins: [VueGoogleMaps.MapElementMixin],
  props: {
    'source': {
      type: String,
      default: '',
    },
    'bounds': {
      type: Object,
      default: () => [],
    },
    'opacity': {
      type: Number,
      default: 0,
    },
  },
  created() {},
  destroyed: function() {
    this.$overlay.setMap(null);
  },
  render() {
    return '';
  },
}));

export default {
  name: 'PropertyDetail',
  components: {
    MediaLibrary,
    Sticky,
    LocationList,
  },
  props: {
    isEdit: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      postForm: Object.assign({}, defaultForm),
      loading: false,
      countries: [],
      countriesProps: {
        value: 'id',
        label: 'name',
        disabled: 'disabled',
      },
      rules: {
        // name: [{ validator: validateRequire }],
      },
      tempRoute: {},
      currentPlace: null,
      center: { lat: 45.508, lng: -73.587 },
      markers: [
        {
          position: {
            lat: 50.8476424,
            lng: 4.3571696,
          },
        },
      ],
      place: '',
      mapCenter: {
        lat: 50.8476424,
        lng: 4.3571696,
      },
      address: '',
    };
  },
  computed: {
    contentShortLength() {
      return this.postForm.content_short.length;
    },
    lang() {
      return this.$store.getters.language;
    },
  },
  watch: {
    '$route': 'reInitialize',
  },
  created() {
    if (this.isEdit) {
      const id = this.$route.params && this.$route.params.id;
      this.fetchData(id);
    } else {
      this.postForm = Object.assign({}, defaultForm);
    }

    // Why need to make a copy of this.$route here?
    // Because if you enter this page and quickly switch tag, may be in the execution of the setTagsViewname function, this.$route is no longer pointing to the current page
    this.tempRoute = Object.assign({}, this.$route);
  },
  methods: {
    getAddressData(addressData, placeResultData, id) {
      this.mapCenter = {
        lat: addressData.geometry.location.lat(),
        lng: addressData.geometry.location.lng(),
      };
      this.markers[0].position.lat = addressData.geometry.location.lat();
      this.markers[0].position.lng = addressData.geometry.location.lng();
      console.log(this.markers);
    },
    setFileList(images) {
      this.postForm.images = images;
      console.log(this.postForm.images);
    },
    setPlace(place) {
      this.currentPlace = place;
    },
    updateCenter(location) {
      this.mapCenter = {
        lat: location.lat(),
        lng: location.lng(),
      };
    },
    updatePlace(place) {
      console.log(place);
      this.updateCenter(place.geometry.location);
    },
    updateCoordinates(location) {
      this.mapCenter = {
        lat: location.latLng.lat(),
        lng: location.latLng.lng(),
      };
    },
    onLocationChange(value){
      this.newLocation = value;
    },
    reInitialize: function() {
      this.$router.go();
    },
    fetchData(id) {
      fetchProperty(id)
        .then(response => {
          this.postForm = response.data[0];
          console.log(this.postForm);
          this.postForm.id;

          this.mapCenter = {
            lat: parseFloat(this.postForm.lat),
            lng: parseFloat(this.postForm.lng),
          };

          this.markers[0].position.lat = parseFloat(this.postForm.lat);
          this.markers[0].position.lng = parseFloat(this.postForm.lng);

          console.log(this.markers);

          if (this.postForm.price === 0){
            this.postForm.price = '';
          }
          // this.postForm.content_short += `   Article Id:${this.postForm.id}`;
          // Set tagsview name
          this.setTagsViewName();
        })
        .catch(err => {
          console.log(err);
        });
    },
    setTagsViewName() {
      // const name = 'Edit Article'; // Should move to i18n
      // const route = Object.assign({}, this.tempRoute, {
      // name: `${name}-${this.postForm.id}`,
      // });
      // this.$store.dispatch('updateVisitedView', route);
    },
    submitForm() {
      this.loading = true;
      if (typeof this.newLocation === 'undefined'){
        this.newLocation = this.postForm.location_id;
      }

      this.postForm.mapCenter = this.mapCenter;
      this.postForm.location_id = this.newLocation;

      if (typeof this.postForm.id !== 'undefined'){
        updateProperty(this.postForm.id, this.postForm).then(response => {
          this.$message({
            message: 'Property has been updated successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
        });
      } else {
        console.log('Created');
        createProperty(this.postForm).then(response => {
          this.$message({
            message: 'Property has been created successfully',
            type: 'success',
            duration: 5 * 1000,
          });
          this.loading = false;
          this.dialogPermissionLoading = false;
          this.dialogPermissionVisible = false;
          this.$router.push({ path: '/administrator/properties' }, onAbort => {});
        });
      }
    },
  },
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
@import "~@/styles/mixin.scss";
.createPost-container label.el-form-item__label {
  width: 100% !important;
}
.createPost-container {
  position: relative;
  .createPost-main-container {
    padding: 0 45px 20px 50px;
    .postInfo-container {
      position: relative;
      @include clearfix;
      margin-bottom: 10px;
      .postInfo-container-item {
        float: left;
      }
    }
  }
  .word-counter {
    width: 40px;
    position: absolute;
    right: -10px;
    top: 0px;
  }
}
</style>
<style>
.createPost-container label.el-form-item__label {
  text-align: left;
}
</style>
