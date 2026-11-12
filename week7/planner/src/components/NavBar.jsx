import { NavLink } from 'react-router'

function NavBar() {
  return (
    <nav aria-label="Main navigation">
      <NavLink to="/" end>
        Home
      </NavLink>

      <NavLink to="/tasks">
        Tasks
      </NavLink>

      <NavLink to="/areas">
        Study Areas
      </NavLink>
    </nav>
  )
}

export default NavBar