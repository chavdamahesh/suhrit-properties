<template>
  <property-detail :is-edit="true" />
</template>

<script>
import PropertyDetail from './components/PropertyDetail';

export default {
  name: 'EditForm',
  components: { PropertyDetail },
};
</script>
