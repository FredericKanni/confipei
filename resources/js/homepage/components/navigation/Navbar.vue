<template>
  <div>
    <v-app-bar
      color="dark"
      fullscreen
      dark
    >

      <v-toolbar-title>ConfiPei</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group>
            <v-btn block to="/">Accueil</v-btn>
            <v-btn block to="/dashboard">Dashboard</v-btn>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script>
  export default {
    data: () => ({
      drawer: false,
    }),
  }
</script>