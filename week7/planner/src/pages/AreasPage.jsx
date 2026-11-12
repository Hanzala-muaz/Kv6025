import AreaCard from '../components/AreaCard'
import { studyAreas, tasks } from '../data/studyData'

function AreasPage() {
  return (
    <section>
      <h2>Study Areas</h2>
      <p>Explore your study areas and their assigned tasks.</p>

      <div className="area-grid">
        {studyAreas.map(area => {
          const taskCount = tasks.filter(
            task => task.areaId === area.id
          ).length

          return (
            <AreaCard
              key={area.id}
              area={area}
              taskCount={taskCount}
            />
          )
        })}
      </div>
    </section>
  )
}

export default AreasPage