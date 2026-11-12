import { Outlet } from 'react-router'
import NavBar from './NavBar'

function Layout() {
  return (
    <div className="app-layout">
      <header className="site-header">
        <h1>Personal Study Planner</h1>
        <NavBar />
      </header>

      <main id="main-content">
        <Outlet />
      </main>

      <footer className="site-footer">
        <p>KV6025 — Personal Study Planner</p>
      </footer>
    </div>
  )
}

export default Layout