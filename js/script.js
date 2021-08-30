Vue.config.devtools = true;  // per attivare il debug nell'estensione di Vue nel browser.

new Vue(    
    {
        el: '#app',
        data: {
            discs: []
        },
        created() { // un evento particolare, dove l'applicazione vue non è stata ancora mostrata ma è stata caricata
            
            axios.get('http://localhost:8888/boolean-live-php/php-api-seconda-parte/api/api.php')
                .then((response) => {
                    this.discs = response.data;
            })   

        }

    }
);


