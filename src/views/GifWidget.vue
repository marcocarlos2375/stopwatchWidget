<template>
  <NcDashboardWidget
    :items="items"
    :show-more-url="showMoreUrl"
    :show-more-text="title"
    :loading="state === 'loading'"
  >
    <template #empty-content>
      <div>
        <h1>{{ time }}</h1>
        <button @click="start">Start</button>
        <button @click="stop">Stop</button>
        <button @click="reset">Reset</button>
      </div>
    </template>
  </NcDashboardWidget>
</template>

<script>
import NcDashboardWidget from "@nextcloud/vue/dist/Components/NcDashboardWidget.js";
import NcEmptyContent from "@nextcloud/vue/dist/Components/NcEmptyContent.js";

export default {
  name: "GifWidget",
  data() {
    return {
      time: 0,
      timer: null,
    };
  },
  components: {
    FolderIcon,
    NcDashboardWidget,
    NcEmptyContent,
  },

  props: {
    title: {
      type: String,
      required: true,
    },
  },

  watch: {},

  beforeDestroy() {},

  beforeMount() {},

  mounted() {
    // Charger le temps depuis le localStorage
    this.time = localStorage.getItem("stopwatch_time") || 0;
  },

  methods: {
    start() {
      this.timer = setInterval(() => {
        this.time++;
        localStorage.setItem("stopwatch_time", this.time);
      }, 1000);
    },
    stop() {
      clearInterval(this.timer);
    },
    reset() {
      this.time = 0;
      localStorage.removeItem("stopwatch_time");
    },
  },
};
</script>

<style scoped lang="scss">
//ok
</style>
