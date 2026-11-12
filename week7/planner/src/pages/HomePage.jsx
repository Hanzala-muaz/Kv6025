import { Link } from 'react-router'
import { tasks } from '../data/studyData'

function HomePage() {
  const todoCount = tasks.filter(task => task.status === 'To do').length
  const doingCount = tasks.filter(task => task.status === 'Doing').length
  const doneCount = tasks.filter(task => task.status === 'Done').length

  return (
    <section>
      <h2>Welcome to your Study Planner</h2>
      <p>
        Keep track of your study tasks and monitor your progress.
      </p>

      <div className="summary-grid">
        <div className="summary-card">
          <h3>To do</h3>
          <p>{todoCount}</p>
        </div>

        <div className="summary-card">
          <h3>Doing</h3>
          <p>{doingCount}</p>
        </div>

        <div className="summary-card">
          <h3>Done</h3>
          <p>{doneCount}</p>
        </div>
      </div>

      <p>
        <Link to="/tasks">View all tasks</Link>
      </p>
    </section>
  )
}

export default HomePage