<template>
    <div >
      <Navbar></Navbar>
    <v-content>
        <router-view></router-view>
    </v-content>
    <Footer/>
                  
             
    </div>
</template>


<script>
import Navbar from "../navigation/Navbar";
import Footer from "../navigation/Footer";
export default {
  components: {
    Navbar,
    Footer
  }
};
</script>