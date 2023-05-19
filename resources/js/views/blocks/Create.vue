<template>
  <block-detail :is-edit="false" />
</template>

<script>
import BlockDetail from './components/BlockDetail';

export default {
  name: 'CreateForm',
  components: { BlockDetail },
};
</script>

