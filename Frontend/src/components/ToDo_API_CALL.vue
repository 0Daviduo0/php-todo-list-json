<script>

    import axios from 'axios';

    const ToDO_URL = 'http://localhost/php-todo-list-json/Backend/ToDo_API.php';

    export default {
        name: 'ToDo_API_CALL',
        mounted() {
            axios.get(ToDO_URL).then(res => {

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
