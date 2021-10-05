<template>
  <div class="container-fluid m-4">
    <div class="row">
      <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-xl-4 offset-xl-2  border border-dark">
        <div class="container">
          <div class="row">
            <div class="col-12 font-weight-bold pt-3">
              Create Process
              <hr class="text-dark">
            </div>
            <div class="col-4 font-weight-bold">
              Type
            </div>
            <div class="col-4 ">
              <select class="custom-select" v-model="type">
                <option disabled value=""></option>
                <option value="1">VOWELS_COUNT</option>
              </select>
            </div>
            <div class="col-12 mt-4 font-weight-bold">
              Input
            </div>
            <div class="col-12 mt-2 mb-3">
              <textarea v-model="input" name="input" rows="5"></textarea>
            </div>
            <div class="col-3">
              <button @click="post_process" >Create</button>
            </div>
            <div class="col-8">
              <button >Create and Run</button>
            </div>
            <div id="respone" :class="text_color" class="col-12 mt-3">
              {{resp}}
            </div>
          </div>
        </div>
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
      input: '',
      text_color: 'text-dark'
    }
  },
  methods:{

    async  post_process(){
      const data_submit = {
        "type" : this.type,
        "input": this.input
      }

      const url = "http://"+ window.location.hostname +":8081/process"
      this.resp = await fetch(url, {
        method: 'POST',
        cache: 'no-cache',
        headers: {
          //'Content-Type': 'application/json'
        },
        body: JSON.stringify(data_submit)
        //body: data_submit
      })
        .then(response => response.json())
        .then(data => {
          if(data.error){
            this.text_color = 'text-danger'
            return data.message
          }
            this.text_color = 'text-success'
          return "Proceso creado correctamente: " + data.id
        });

      console.log(this.resp)
    }

  },
}

</script>

<style>
textarea{
  width: 100%;
}
button{
  background-color: white;
  font-weight: bold;
  padding: 4px,8px,4px,8px 
}
#respone{
  min-height: 100px;
}
</style>