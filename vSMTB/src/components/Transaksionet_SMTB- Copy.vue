<template>
	<div class="Transaksionet_SMTB container">
	  <Alert v-if="alert" :message="alert" />
	  <h1 class="page-header">
		Sistemi per Menaxhimin e Transaksioneve Bankare (SMTB)
	  </h1>
	  <input
		class="form-control"
		placeholder="Shkruaj llojin e Transaksionit"
		v-model="filterInput"
	  />
	  <br />
	  <div class="table-container">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th style="font-size: 12px">LlogariaBurimore_SMTB</th>
			  <th style="font-size: 12px">LlogariaPranuese_SMTB</th>
			  <th style="font-size: 12px">ShumaTransaksionit_SMTB</th>
			  <th style="font-size: 12px">ValutaTransaksionit_SMTB</th>
			  <th style="font-size: 12px">LlojiTransaksionit_SMTB</th>
			  <th style="font-size: 12px">DataTransaksionit_SMTB</th>
			  <th style="font-size: 12px">StatusiTransaksionit_SMTB</th>
			  <th style="font-size: 12px">Menaxho te dhenat</th>
			</tr>
		  </thead>
		  <tbody>
			<tr
			  v-for="Transaksioni_SMTB in filterBy(
				Transaksionet_SMTB,
				filterInput
			  )"
			  :key="Transaksioni_SMTB.id"
			>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.LlogariaBurimore_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.LlogariaPranuese_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.ShumaTransaksionit_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.ValutaTransaksionit_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.LlojiTransaksionit_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.DataTransaksionit_SMTB }}
			  </td>
			  <td style="font-size: 12px">
				{{ Transaksioni_SMTB.StatusiTransaksionit_SMTB }}
			  </td>
			  <td>
				<router-link
				  class="btn btn-primary"
				  :to="'/edit/' + Transaksioni_SMTB.id"
				  style="width: 80px"
				  >Modifiko</router-link
				>
				<button
				  class="btn btn-danger"
				  @click="deleteTransaksioni_SMTB(Transaksioni_SMTB.id)"
				  style="width: 80px"
				>
				  Fshije
				</button>
			  </td>
			</tr>
		  </tbody>
		</table>
	  </div>
	</div>
  </template>
  
  <script>
  import Alert from "./Alert.vue";
  
  export default {
	name: "Transaksionet_SMTB",
	data() {
	  return {
		Transaksionet_SMTB: [],
		alert: "",
		filterInput: "",
	  };
	},
	methods: {
	  fetchTransaksionet_SMTB() {
		this.$http
		  .get("http://slimapp:81/api/Transaksionet_SMTB")
		  .then((response) => {
			console.log("API response:", response.body); // Debugging log
			this.Transaksionet_SMTB = response.body;
		  })
		  .catch((error) => {
			console.error("Error fetching data:", error); // Debugging log for errors
		  });
	  },
	  filterBy(list, value) {
		value = value.charAt(0).toUpperCase() + value.slice(1);
		return list.filter((Transaksioni_SMTB) => {
		  return Transaksioni_SMTB.LlojiTransaksionit_SMTB.includes(value);
		});
	  },
	  deleteTransaksioni_SMTB(id) {
		this.$http
		  .delete("http://slimapp:81/api/Transaksioni_SMTB/delete/" + id)
		  .then((response) => {
			console.log("Delete response:", response); // Debugging log
			this.$router.push({
			  path: "/",
			  query: { alert: "Të dhënat janë fshirë" },
			});
			this.fetchTransaksionet_SMTB(); // Refresh the list after deletion
		  })
		  .catch((error) => {
			console.error("Error deleting data:", error);
		  });
	  },
	},
	created() {
	  if (this.$route.query.alert) {
		this.alert = this.$route.query.alert;
	  }
	  this.fetchTransaksionet_SMTB();
	},
	watch: {
	  $route() {
		if (this.$route.query.alert) {
		  this.alert = this.$route.query.alert;
		}
		this.fetchTransaksionet_SMTB();
	  },
	},
	components: {
	  Alert,
	},
  };
  </script>
  
  <style scoped>
  .table-container {
	margin-left: 1px;
  }
  </style>
  