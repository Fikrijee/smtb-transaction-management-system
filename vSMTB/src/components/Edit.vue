<template>
  <div class="edit container">
    <h1 class="page-header">Modifiko të dhënat për transaksione bankare</h1>
    <form @submit.prevent="updateTransaksioni_SMTB">
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
        <h4>Detajet e transaksionit</h4>
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
      <button type="submit" class="btn btn-primary">Modifiko</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "edit",
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
    fetchTransaksioni_SMTB(id) {
      this.$http
        .get("http://slimapp:81/api/Transaksioni_SMTB/" + id)
        .then((response) => {
          this.Transaksioni_SMTB = response.body;
        })
        .catch((error) => {
          console.error("Error fetching transaction data:", error);
        });
    },
    updateTransaksioni_SMTB() {
      if (
        !this.Transaksioni_SMTB.LlogariaBurimore_SMTB ||
        !this.Transaksioni_SMTB.LlogariaPranuese_SMTB ||
        !this.Transaksioni_SMTB.ShumaTransaksionit_SMTB
      ) {
        alert("Ju lutemi plotësoni të gjitha fushat e kërkuara");
      } else {
        this.$http
          .put(
            "http://slimapp:81/api/Transaksioni_SMTB/update/" +
              this.$route.params.id,
            this.Transaksioni_SMTB
          )
          .then((response) => {
            console.log("Update response:", response); // Debugging log
            this.$router.push({
              path: "/",
              query: {
                alert: "Të dhënat për transaksionin bankar janë perditesuar",
              },
            });
          })
          .catch((error) => {
            console.error("Error updating transaction:", error); // Debugging log for errors
          });
      }
    },
  },
  created() {
    this.fetchTransaksioni_SMTB(this.$route.params.id);
  },
};
</script>

<style scoped></style>
