<template>
  <property-detail :is-edit="false" />
</template>

<script>
import PropertyDetail from './components/PropertyDetail';

export default {
  name: 'CreateForm',
  components: { PropertyDetail },
};
</script>
