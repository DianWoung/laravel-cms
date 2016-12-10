<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading box">卡片详情</div>
                    <input v-on:input="fetchdata" v-model="msg">
                    <p>{{ info }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
        name:'box',
        data: ()=>{
          return {
            msg:1,
            info:''
          }
        },
        methods:{
          fetchdata(){
            if(this.msg !=='') {
            this.$http.get('/admin/card/' + this.msg).then((response) =>{
                this.info = response.data;

            },(response) =>{
               this.info = response.statusText;
              }
            );
            }else{
              this.info = '不能为空';
            };

        }
    }
    }
</script>
