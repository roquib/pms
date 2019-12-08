<template>
  <div class="page-inner">
    <div class="page-title">
      <h3>Patients</h3>
      <div class="page-breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Patients</li>
        </ol>
      </div>
    </div>
    <div id="main-wrapper">
      <div class="row">
        <div class="invoice col-md-12">
          <div class="panel panel-white">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12 text-right">
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-print"></i> Print
                  </button>
                </div>

                <!--table-->

                <div class="col-md-12">
                  <table class="table table-striped text-center">
                    <tr>
                      <th class="text-center">Id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Action</th>
                    </tr>

                    <tr v-for="patient in patients" :key="patient.id">
                      <td>{{ patient.id }}</td>
                      <td>{{ patient.name }}</td>
                      <td>{{ patient.gender }}</td>
                      <td>
                        <a v-bind:href="'/patients/'+patient.id" class="btn btn-primary">
                          View
                        </a>
                        <a v-bind:href="'/patients/'+patient.id" class="btn btn-danger">
                          Delete
                        </a>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
              <!--row-->
            </div>
          </div>
        </div>
      </div>
      <!-- Row -->
    </div>
    <!-- Main Wrapper -->
    <div class="page-footer">
      <p class="no-s text-center">2019<i> &copy; MD MOMEN SHEKH</i></p>
    </div>
  </div>
  <!-- Page Inner -->
</template>
<script>
  export default {
    name: "AllPatient",
    mounted() {
      console.log("component is mounted");
      axios
        .get("/api/patient/all")
        .then(({ data }) => (this.patients = data.data));
    },
    data() {
      return {
        patients: {}
      };
    }
  };
</script>
