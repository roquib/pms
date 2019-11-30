<template>
  <div class="page-inner">
    <div class="container">
      <h1 class="display-4">
        List of patients
      </h1>
    </div>
  </div>
  <!-- Page Inner -->
</template>
<script>
  export default {
    name: "AllPatient",
    mounted() {
      console.log("component is mounted");
      axios.get("/api/patient/all").then(({ data }) => (this.patients = data));
    },
    data() {
      return {
        patients: {}
      };
    }
  };
</script>
