import Alpine from 'alpinejs';

import React from 'react';
import ReactDOM from 'react-dom';
import TaskDashboard from './components/TaskDashboard';
import './bootstrap';

window.Alpine = Alpine;

ReactDOM.render(<TaskDashboard />, document.getElementById('task-dashboard'));

// Render the React component inside the div with id 'task-dashboard'
if (document.getElementById('task-dashboard')) {
    ReactDOM.render(<TaskDashboard />, document.getElementById('task-dashboard'));
}

Alpine.start();
