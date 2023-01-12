<script>

    import axios from 'axios';

    const ToDO_URL = 'http://localhost/php-todo-list-json/Backend/ToDo_API.php';

    export default {
        name: 'ToDo_API_CALL',
        data() {
            return{
                ToDoList: []
            }
        },
        mounted() {
            // data get sendend to server
            axios.get(ToDO_URL, { params: {'test2' : 'Anche questo è un test'}})
                // data get picked from server
                .then(res => {

                const data = res.data;
                this.ToDoList = data;

                })
        }
    }

</script>

<template>

    <h1>ToDo APP</h1>
    <ul>
        <li v-for="(note, index) in ToDoList" :key="index">
            {{  note.text }}
        </li>
    </ul>

</template>

<style scoped>

</style>
