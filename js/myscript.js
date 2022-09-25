console.log('ciao ciao')

const app= new Vue({
    el:'#app',
    data:{
        title:'Php Disc 2',
        listDisc: [],
    },
    created() {
        axios
          .get("http://localhost/boolean70/php-ajax-dischi/api/apiDischi.php")
          .then((res) => {
            // console.log(res.data.response);
            this.listDisc = res.data.response;
            // console.log(this.listDisc);
          })
          .catch((err) => {
            console.log("Error", err);
          })
          .finally(() => {
            console.log("Finito");
        
          });
      },
   
})