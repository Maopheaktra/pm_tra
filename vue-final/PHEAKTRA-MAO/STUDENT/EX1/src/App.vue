<template>
  <div class="container">
    <!-- Add User Form -->
    <employee-list-vue></employee-list-vue>
  </div>
</template>

<script>
import EmployeeListVue from "./components/views/employee/List.vue"
export default {
  name: 'App',
  components:{
    EmployeeListVue,
  },
  
};
</script>

<style>

</style>
