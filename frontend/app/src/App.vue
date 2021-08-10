<template>
  <div id="app">
    <div class="nav mt-2" id="nav">
      <router-link class="text-dark pl-4" to="/">Create process</router-link>
      <router-link class="text-dark pl-4" to="/list_processes">List processes</router-link>
    </div>
    <hr>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  font-size: 22px;
}

hr{
  border-top: 1px solid black;
}

#nav a.router-link-exact-active {
  font-weight: bold;
}
</style>
