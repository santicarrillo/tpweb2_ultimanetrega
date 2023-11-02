'use strict'
const URL = "api/tareas/";



async function getlistpiloto() {
    try {
        let response = await fetch(URL);
        if (!response.ok) {
            throw new Error('Recurso no existe');
        }
        tasks = await response.json();

        showTasks();
    } catch(e) {
        console.log(e);
    }
}
