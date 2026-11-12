export const studyAreas = [
  { id: 1, name: 'Web Development', focus: 'PHP basics' },
  { id: 2, name: 'Software Design', focus: 'Architecture design' },
]

export const tasks = [
  {
    id: 1,
    title: 'Review PHP variables and arrays',
    status: 'To do',
    priority: 'High',
    areaId: 1,
  },
  {
    id: 2,
    title: 'Complete the architecture trade-off notes',
    status: 'Doing',
    priority: 'Medium',
    areaId: 2,
  },
  {
    id: 3,
    title: 'Update the development log',
    status: 'To do',
    priority: 'Medium',
    areaId: 2,
  },
  {
    id: 4,
    title: 'Practise PHP functions',
    status: 'Done',
    priority: 'Low',
    areaId: 1,
  },
  {
    id: 5,
    title: 'Read about REST APIs',
    status: 'To do',
    priority: 'High',
    areaId: 1,
  },
]

export function getTaskById(id) {
  return tasks.find(task => task.id === id) ?? null
}

export function getAreaName(areaId) {
  const area = studyAreas.find(a => a.id === areaId)
  return area ? area.name : 'Unknown area'
}