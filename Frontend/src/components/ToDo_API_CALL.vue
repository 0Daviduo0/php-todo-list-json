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
            addNote(e) {
                e.preventDefault();

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

            toggleNote(index){

                console.log(index);

                const toggle_par = {
                    params: {
                        'index': index
                    }
                };

                axios.get(ToDO_URL + "toggleToDo_API.php", toggle_par)
                .then(res => {
                    const data = res.data;

                    if (data == true){
                        this.RetrieveNotes();
                    }
                })
                
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

            <div @click="toggleNote(index)">

                <s v-if="note.completed">
                    {{  note.text }}
                </s>
                <span v-else>
                    {{  note.text }}
                </span>

            </div>

        </li>
    </ul>

    <form @submit="addNote">
        <input type="text" name="userNote" v-model="newNote">
        <input type="submit" value="Add Note">
    </form>

</template>

<style scoped>

</style>
