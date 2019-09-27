<template>
  <div>
    <button class="btn btn-primary btn-sm" @click="followUser" v-text="buttonText"></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],
  mounted() {
    console.log(this.follows);
    console.log("Praise the Lord");
  },
  data: function() {
    return {
      status: this.follows
    };
  },
  methods: {
    async followUser() {
      try {
        const result = await axios.post(`/follow/${this.userId}`);
        this.status = !this.status;
      } catch (err) {
        if ((err.response.status = 401)) {
          window.location = "/login";
        }
      }
    }
  },
  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    }
  }
};
</script>