<script>

    import axios from 'axios';

    const ToDO_URL = 'http://localhost/php-todo-list-json/Backend/ToDo_API.php';

    export default {
        name: 'ToDo_API_CALL',
        mounted() {
            // data get sendend to server
            axios.get(ToDO_URL, { params: {'test2' : 'Anche questo è un test'}})
                // data get picked from server
                .then(res => {

                const data = res.data;
                console.log(data)

                })
        }
    }

</script>

<template>


</template>

<style scoped>

</style>
