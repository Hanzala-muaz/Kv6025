function AreaCard({ area, taskCount }) {
  return (
    <article className="area-card">
      <h3>{area.name}</h3>
      <p>Focus: {area.focus}</p>
      <p>Tasks: {taskCount}</p>
    </article>
  )
}

export default AreaCard