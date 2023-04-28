import { NavLink } from "react-router-dom";
import "./nav-bar.css";

export default function NavBar() {
  return (
    <nav className="nav-bar">
      <div>
        <NavLink to="/">
          <p>Eric</p>
        </NavLink>
      </div>
      <div>
        <NavLink to="/about-me">
          <p>Sobre mi</p>
        </NavLink>
        <NavLink to="/portfolio">
          <p>Portfolio</p>
        </NavLink>
        <NavLink to="/contact">
          <p>Contacto</p>
        </NavLink>
      </div>
    </nav>
  );
}
