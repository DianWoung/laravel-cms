<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">上传文件</div>
                    <div class="filebox">
                        <form @submit.prevent="submit" enctype="multipart/form-data">

                        <input type="text" name="title" placeholder="标题">

                        <input type="file" name="file">

                         <input type="submit" value="上传">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
      name:'filebox',
     methods:{
        submit(event) {
          var formData = new FormData(event.target)
       this.$http.post('/admin/upload',formData).then(
         (data,status,request)=>{
         self.location='/admin/card/';
        },
          (data,status,request)=>{
            console.log(data);
     })
     }
     }

    }



</script>