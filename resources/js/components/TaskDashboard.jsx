import React, { useState, useEffect } from 'react';
import axios from 'axios';

function TaskDashboard() {
    const [tasks, setTasks] = useState([]);
    const [filter, setFilter] = useState('all');

    useEffect(() => {
        axios.get('/api/tasks').then(response => {
            setTasks(response.data);
        });
    }, []);

    const filteredTasks = tasks.filter(task => {
        return filter === 'all' || task.status === filter;
    });

    return (
        <div>
            <h1>Task Dashboard</h1>
            <div>
                <button onClick={() => setFilter('all')}>All</button>
                <button onClick={() => setFilter('pending')}>Pending</button>
                <button onClick={() => setFilter('completed')}>Completed</button>
            </div>
            <ul>
                {filteredTasks.map(task => (
                    <li key={task.id}>
                        {task.title} - {task.status}
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default TaskDashboard;

