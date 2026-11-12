import { Link, useParams } from 'react-router'
import StatusBadge from '../components/StatusBadge'
import { getTaskById, getAreaName } from '../data/studyData'

function TaskDetailPage() {
  const { id } = useParams()
  const task = getTaskById(Number(id))

  if (!task) {
    return (
      <section>
        <h2>Task not found</h2>
        <p>The requested task does not exist.</p>
        <Link to="/tasks">Back to Tasks</Link>
      </section>
    )
  }

  return (
    <section>
      <h2>{task.title}</h2>

      <div className="task-detail">
        <p>Study area: {getAreaName(task.areaId)}</p>
        <p>Priority: {task.priority}</p>
        <p>Status: <StatusBadge status={task.status} /></p>
      </div>

      <p>
        <Link to="/tasks">Back to Tasks</Link>
      </p>
    </section>
  )
}

export default TaskDetailPage