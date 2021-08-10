<template>
  <div class="create_process">
    <div>
      <h1>Create Process</h1>
      <div>
        Type
        <select v-model="type">
          <option disabled value=""></option>
          <option value="1">VOWELS_COUNT</option>
        </select>
      </div>
      <div>
        <div>Input</div>
        <textarea v-model="input" name="input" cols="30" rows="10"></textarea>
      </div>
      <div>
        <button @click="post_process" >Create</button>
        <button>Create and Run</button>
      </div>
      <div >
        {{resp}}
      </div>
    </div>
    
  </div>
</template>

<script>

export default {
  name: 'Create_process',
  data() {
    return {
      type: Number,
      resp: '',
      input: ''
    }
  },
  methods:{

    async  post_process(){
      const data_submit = {
        "type" : this.type,
        "input": this.input
      }

      this.resp = await fetch("http://127.0.0.1:8081/api/process", {
        method: 'POST',
        cache: 'no-cache',
        headers: {
          //'Content-Type': 'application/json'
        },
        body: JSON.stringify(data_submit)
      })
        .then(response => response.json())
        .then(data => {
          if(data.error){
            return data.message
          }
          return "Proceso creado correctamente: " + data.id
        });

      console.log(this.resp)
    }

  },
}

</script>
