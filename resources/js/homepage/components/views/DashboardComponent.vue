<template>
  <v-data-table :headers="headers" :items="confitures"  class="elevation-1">

  
  </v-data-table>
</template>


<script>
export default {
  data: () => ({

    confitures:[],
    dialog: false,
    headers: [

      //cest ici qu il faut changer les donne
      {
        text: "confitures",
        align: "start",
        sortable: false,
        value: "name"
      },
       {
        text: "prix",
        value: "prix"
      },
      { text: "fruits", value: "fruits.name" },
      { text: "producteur", value: "producteur.name" },
      { text: "recompenses", value: "recompenses.name" },
      { text: "Actions", value: "actions", sortable: false }
    ],
    desserts: [],
    editedIndex: -1,
    editedItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0
    },
    defaultItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0
    }
  }),

  computed: {
    formTitle() {
      return this.editedIndex === -1 ? "New Item" : "Edit Item";
    }
  },

  watch: {
    dialog(val) {
      val || this.close();
    }
  },

  created() {
    this.initialize();
    this.getDatas();
  },

  mounted() {
    console.log("toto.");
  },

  methods: {
    getDatas() {
      axios
        .get("/api/confiture")
        .then(({ data }) => {
          this.confitures=data.data;
         console.log(this.confitures);
             console.log(data);
             
               console.log(data.data[0].fruits[0].name);
        })
        .catch(error => console.log(error));
    },

    initialize() {
      this.desserts = [
        {
          name: "Frozen Yogurt",
          calories: 159,
          fat: 6.0,
          carbs: 24,
          protein: 4.0
        },
      
      ];
    },

    editItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },

    deleteItem(item) {
      const index = this.desserts.indexOf(item);
      confirm("Are you sure you want to delete this item?") &&
        this.desserts.splice(index, 1);
    },

    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },

    save() {
      if (this.editedIndex > -1) {
        Object.assign(this.desserts[this.editedIndex], this.editedItem);
      } else {
        this.desserts.push(this.editedItem);
      }
      this.close();
    }
  }
};
</script>