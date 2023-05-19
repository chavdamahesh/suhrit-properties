<template>
  <block-detail :is-edit="true" />
</template>

<script>
import BlockDetail from './components/BlockDetail';

export default {
  name: 'EditForm',
  components: { BlockDetail },
};
</script>

