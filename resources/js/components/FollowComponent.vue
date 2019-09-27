<template>
  <div>
    <button class="btn btn-primary btn-sm" @click="followUser">Follow</button>
  </div>
</template>

<script>
export default {
  props: ["userId"],
  mounted() {
    console.log("Praise the Lord");
  },
  methods: {
    async followUser() {
      const result = await axios.post(`/follow/${this.userId}`);
      console.log(result);
    }
  }
};
</script>