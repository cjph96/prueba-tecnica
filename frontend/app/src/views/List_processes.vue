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
              {{process.started_at.data}}
            </td>
            <td v-else></td>

            <td v-if="process.finished_at !== null">
              {{process.finished_at.data}}
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

            <td v-if="process.status == 1">
              <button>▶ Start</button>
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
    return {
      processes: []
    }
  },
  methods:{

    async  get_processes(){
      this.processes = await fetch("http://127.0.0.1:8081/api/process", {
      }) 
        .then(response => response.json())
        .then(data => {
          return data;
        });
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