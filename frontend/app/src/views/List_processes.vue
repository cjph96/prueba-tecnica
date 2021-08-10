<template>
  <div class="container-fluid">
    <div v-if="processes.length == 0">
      <div class="row text-center">
        <div class="col-6 offset-3">
          <div class="loader"></div>
          <div>Loading list ...</div>
        </div>
      </div>
    </div>
    <div v-else>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Process ID</th>
            <th>Input</th>
            <th>Output</th>
            <th>Created at</th>
            <th>Started at</th>
            <th>Finished at</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody v-for="process in processes" :key="process.id">
          <tr>
            <td>{{process.id}}</td>
            <td>{{process.input}}</td>
            <td>{{process.output}}</td>

            <td>{{process.created_at.date}}</td>

            <td v-if="process.started_at !== null">
              {{process.started_at.date}}
            </td>
            <td v-else></td>

            <td v-if="process.finished_at !== null">
              {{process.finished_at.date}}
            </td>
            <td v-else></td>

            <td v-if="process.status == 1">
              NOT STARTED
            </td>
            <td v-if="process.status == 2">
              PROCESSING
            </td>
            <td v-if="process.status == 3">
              FINISHED
            </td>
            <td v-if="process.status == 4">
              ERROR
            </td>

            <td v-if="process.status == 1">
              <button @click="star_processes(process.id)">▶ Start</button>
            </td>
            <td v-else></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>

export default {
  name: 'List_processes',
  /*props: {
      msg: String
  },*/
  data() {
    console.log(window.location.hostname)
    return {
      processes: []
    }
  },
  methods:{

    async  get_processes(){
      const url = "http://"+ window.location.hostname +":8081/api/process"
      this.processes = await fetch(url, {
      }) 
        .then(response => response.json())
        .then(data => {
          return data;
        });
    },

    async star_processes(id){
      const url = "http://"+ window.location.hostname +":8081/api/process/"+ id +"/start"
      await fetch(url, {
        method: 'POST',
      }) 
        .then(response => response.json())
        .then(data => {
          console.log( data)
        });
      this.get_processes() //Refrescamos la lista
    }

  },
  created(){
    this.get_processes()
  }
}

</script>

<style>
  table{
    font-size: 18px;
    text-align: center;
  }
  td{
    min-width: 150px;
  }
  .loader {
    margin: auto;
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #000; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
</style>