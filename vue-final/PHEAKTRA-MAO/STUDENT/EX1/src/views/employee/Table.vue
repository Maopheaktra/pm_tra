<template>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{employee.name}}</td>
          <td>{{employee.email}}</td>
          <td>{{employee.phone}}</td>
          <td>
            <button class="btn btn-info btn-sm" @click="$emit('show-event')">Details</button>
          </td>
        </tr>
      </tbody>
    </table>
  </template>
  
  <script>
  export default {
    name: "EmployeeTable",
    props: {
      employee: {
        type: Object,
        required: true
      }
    },
    data(){
      return{
        
      }
    }
  };
  </script>
  
  <style>
  .table {
    width: 100%;
    margin-top: 20px;
  }
  </style>
  