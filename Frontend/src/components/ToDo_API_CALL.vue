<script>

    import axios from 'axios';

    const ToDO_URL = 'http://localhost/php-todo-list-json/Backend/';

    export default {
        name: 'ToDo_API_CALL',
        data() {
            return{

                newNote: "",

                ToDoList: []
            }
        },
        methods: {
            addNote(no_reload) {
                no_reload.preventDefault();

                const ToDo_par = {
                    params: {
                        'newNote': this.newNote
                    }
                };

                axios.get(ToDO_URL + "addToDo_API.php", ToDo_par)
                .then(() => {
                    this.RetrieveNotes();
                });
            },
            RetrieveNotes(){
                axios.get(ToDO_URL + "ToDo_API.php")
                .then(res => {
                    const data = res.data;
                    this.ToDoList = data;
                })
            }
        },
        mounted() {
            this.RetrieveNotes();
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

    <form @submit="addNote">
        <input type="text" name="userNote" v-model="newNote">
        <input type="submit" value="Add Note">
    </form>

</template>

<style scoped>

</style>
