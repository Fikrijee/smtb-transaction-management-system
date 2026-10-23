<template>
  <div class="add container">
    <h1 class="page-header">Shto të dhëna për transaksione bankare</h1>
    <form @submit.prevent="addTransaksioni_SMTB">
      <div class="well">
        <h4>Detajet e llogarisë për transaksionin:</h4>
        <br />
        <div class="form-group">
          <label>LlogariaBurimore_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Llogaria Burimore"
            v-model="Transaksioni_SMTB.LlogariaBurimore_SMTB"
            required
          />
        </div>
        <div class="form-group">
          <label>LlogariaPranuese_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Llogaria Pranuese"
            v-model="Transaksioni_SMTB.LlogariaPranuese_SMTB"
            required
          />
        </div>
      </div>
      <div class="well">
        <h4>Detajet e transaksionit:</h4>
        <br />
        <div class="form-group">
          <label>ShumaTransaksionit_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Shuma e Transaksionit"
            v-model="Transaksioni_SMTB.ShumaTransaksionit_SMTB"
            required
          />
        </div>
        <div class="form-group">
          <label>ValutaTransaksionit_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Valuta e Transaksionit"
            v-model="Transaksioni_SMTB.ValutaTransaksionit_SMTB"
          />
        </div>
        <div class="form-group">
          <label>LlojiTransaksionit_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Lloji i Transaksionit"
            v-model="Transaksioni_SMTB.LlojiTransaksionit_SMTB"
            required
          />
        </div>
        <div class="form-group">
          <label>DataTransaksionit_SMTB</label>
          <input
            type="date"
            class="form-control"
            placeholder="Data e Transaksionit"
            v-model="Transaksioni_SMTB.DataTransaksionit_SMTB"
            required
          />
        </div>
        <div class="form-group">
          <label>StatusiTransaksionit_SMTB</label>
          <input
            type="text"
            class="form-control"
            placeholder="Statusi i Transaksionit"
            v-model="Transaksioni_SMTB.StatusiTransaksionit_SMTB"
          />
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Shto</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "add",
  data() {
    return {
      Transaksioni_SMTB: {
        LlogariaBurimore_SMTB: "",
        LlogariaPranuese_SMTB: "",
        ShumaTransaksionit_SMTB: "",
        ValutaTransaksionit_SMTB: "",
        LlojiTransaksionit_SMTB: "",
        DataTransaksionit_SMTB: "",
        StatusiTransaksionit_SMTB: "",
      },
    };
  },
  methods: {
    addTransaksioni_SMTB() {
      if (
        !this.Transaksioni_SMTB.LlogariaBurimore_SMTB ||
        !this.Transaksioni_SMTB.LlogariaPranuese_SMTB ||
        !this.Transaksioni_SMTB.ShumaTransaksionit_SMTB
      ) {
        alert("Ju lutemi plotësoni të gjitha fushat e kërkuara");
      } else {
        this.$http
          .post(
            "http://slimapp:81/api/Transaksioni_SMTB/add",
            this.Transaksioni_SMTB
          )
          .then((response) => {
            console.log("Add response:", response); // Debugging log
            this.$router.push({
              path: "/",
              query: {
                alert: "Të dhënat për transaksionin bankar janë shtuar",
              },
            });
          })
          .catch((error) => {
            console.error("Error adding data:", error); // Debugging log for errors
          });
      }
    },
  },
};
</script>

<style scoped></style>
