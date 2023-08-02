<script setup>
import TaskUpdate from '@/Pages/Tasks/Partials/TaskUpdate.vue';
import TaskItem from '@/Pages/Tasks/Partials/TaskItem.vue';
import TaskDelete from '@/Pages/Tasks/Partials/TaskDelete.vue';
</script>

<template>
    <ul>
        <li
            v-for="task in $page.props.tasks.data"
            :key="task.id"
            class="flex justify-between items-center gap-2 py-2"
        >
            <TaskUpdate :task="task" />
            <TaskItem :task="task" />
            <TaskDelete :task="task" />
        </li>
    </ul>
</template>