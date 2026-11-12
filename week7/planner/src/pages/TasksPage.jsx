import TaskCard from '../components/TaskCard'
import { tasks } from '../data/studyData'

function TasksPage() {
  return (
    <section>
      <h2>My Study Tasks</h2>
      <p>View your tasks, priorities, and progress.</p>

      <div className="task-grid">
        {tasks.map(task => (
          <TaskCard key={task.id} task={task} />
        ))}
      </div>
    </section>
  )
}

export default TasksPage