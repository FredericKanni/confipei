<template>
  <v-data-table :headers="headers" :items="confitures"  class="elevation-1">
 <template v-slot:item.fruits="{ item }">{{displayFruits(item.fruits)}}</template>
      <template v-slot:item.recompenses="{ item }">{{displayRecompenses(item.recompenses)}}</template>
  
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
      { text: "fruits", value: "fruits" },
      { text: "producteur", value: "producteur.name" },
      { text: "recompenses", value: "recompenses" },
      { text: "Actions", value: "actions", sortable: false }
    ],
 
    
  }),



 

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
    
    },


      displayFruits(items){
            var fruits=[];
            items.forEach(item=>{
                fruits.push((item.name))
            })
            return fruits.join(', ');
        },

        displayRecompenses(items){
            var recompenses=[];
            items.forEach(item=>{
                recompenses.push((item.name))
            })
            return recompenses.join(', ');
        }

   

   

  

   
  }
};
</script>