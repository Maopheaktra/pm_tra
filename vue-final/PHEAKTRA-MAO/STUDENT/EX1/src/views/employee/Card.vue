<template>
    <div class="card mt-4 shadow text-center" v-if="isDetail">
      <div class="mx-auto rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
        <img  class="img-fluid" alt="Employee Image" :src="employee.image">
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"><strong>Email: {{employee.email}}</strong></p>
        <p class="card-text"><strong>Phone: {{employee.phone}}</strong></p>
      </div>
    </div>
  </template>
  
  <script>
    
  export default {
    name: "EmployeeCard",
    props:{
      employee: {
        type: Object,
        required: true
      }
    }
  };
  </script>
  
  <style>
  .card {
    border: none;
  }
  
  .card-body {
    padding: 1rem;
  }
  
  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }
  
  .card-text {
    font-size: 1rem;
  }
  
  .rounded-circle {
    margin: 0 auto;
  }
  </style>
  