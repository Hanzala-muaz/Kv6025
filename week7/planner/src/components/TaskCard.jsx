import { Link } from 'react-router'
import StatusBadge from './StatusBadge'
import { getAreaName } from '../data/studyData'

function TaskCard({ task }) {
  return (
    <article className="task-card">
      <h3>
        <Link to={`/tasks/${task.id}`}>
          {task.title}
        </Link>
      </h3>

      <p>Study area: {getAreaName(task.areaId)}</p>
      <p>Priority: {task.priority}</p>

      <StatusBadge status={task.status} />
    </article>
  )
}

export default TaskCard