<template>
  <content-detail :is-edit="false" />
</template>

<script>
import ContentDetail from './components/ContentDetail';

export default {
  name: 'CreateForm',
  components: { ContentDetail },
};
</script>

