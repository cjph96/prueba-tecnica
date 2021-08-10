<template>
  <div class="list_processes">
    <table>
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
            <button>Action</button>
          </td>
          <td v-else></td>
        </tr>
      </tbody>
    </table>
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