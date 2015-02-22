-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2015 a las 16:51:04
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adelaida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audits`
--

CREATE TABLE IF NOT EXISTS `audits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=981 ;

--
-- Volcado de datos para la tabla `audits`
--

INSERT INTO `audits` (`id`, `name`, `title`, `description`, `id_user`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-26 16:18:55', '2015-01-26 16:18:55', NULL),
(2, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-26 16:39:41', '2015-01-26 16:39:41', NULL),
(3, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 00:48:24', '2015-01-28 00:48:24', NULL),
(4, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 03:42:15', '2015-01-28 03:42:15', NULL),
(5, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 03:47:52', '2015-01-28 03:47:52', NULL),
(6, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 04:04:02', '2015-01-28 04:04:02', NULL),
(7, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-30 01:41:47', '2015-01-30 01:41:47', NULL),
(8, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 00:46:58', '2015-01-31 00:46:58', NULL),
(9, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 02:01:12', '2015-01-31 02:01:12', NULL),
(10, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 04:34:59', '2015-01-31 04:34:59', NULL),
(11, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:35:06', '2015-01-31 04:35:06', NULL),
(12, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:43:06', '2015-01-31 04:43:06', NULL),
(13, 'users_get_create', 'Formulario de Creación de Usuarios', 'Vizualización del Formulario de Creación de Usuarios', 1, 'READ', '2015-01-31 04:43:17', '2015-01-31 04:43:17', NULL),
(14, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:44:46', '2015-01-31 04:44:46', NULL),
(15, 'users_get_create', 'Formulario de Creación de Usuarios', 'Vizualización del Formulario de Creación de Usuarios', 1, 'READ', '2015-01-31 04:44:48', '2015-01-31 04:44:48', NULL),
(16, 'users_create', 'Usuario Agregado', 'El usuario Daniel Henriquez fue agregado exitosamente', 1, 'CREATE', '2015-01-31 04:45:18', '2015-01-31 04:45:18', NULL),
(17, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:45:19', '2015-01-31 04:45:19', NULL),
(18, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:47:13', '2015-01-31 04:47:13', NULL),
(19, 'users_get_show', 'Visualización detallada de Usuario', 'Vizualización detallada del Usuario robertdacorte', 1, 'READ', '2015-01-31 04:47:18', '2015-01-31 04:47:18', NULL),
(20, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:54:56', '2015-01-31 04:54:56', NULL),
(21, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:33:29', '2015-01-31 07:33:29', NULL),
(22, 'users_get_edit', 'Formulario de Edición de Usuarios', 'Vizualización del Formulario de Edición de Usuarios', 1, 'READ', '2015-01-31 07:33:32', '2015-01-31 07:33:32', NULL),
(23, 'users_edit', 'Usuario Editado', 'El usuario Daniel Henriquez fue editado exitosamente', 1, 'UPDATE', '2015-01-31 07:33:37', '2015-01-31 07:33:37', NULL),
(24, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:33:37', '2015-01-31 07:33:37', NULL),
(25, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:35:14', '2015-01-31 07:35:14', NULL),
(26, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:50:24', '2015-01-31 09:50:24', NULL),
(27, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 09:50:28', '2015-01-31 09:50:28', NULL),
(28, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Metodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(29, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(30, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 09:51:42', '2015-01-31 09:51:42', NULL),
(31, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Cuentas de Facturación fue agregada exitosamente', 1, 'CREATE', '2015-01-31 09:52:19', '2015-01-31 09:52:19', NULL),
(32, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:52:20', '2015-01-31 09:52:20', NULL),
(33, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:52:23', '2015-01-31 09:52:23', NULL),
(34, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-01-31 09:52:28', '2015-01-31 09:52:28', NULL),
(35, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-01-31 09:52:31', '2015-01-31 09:52:31', NULL),
(36, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:52:32', '2015-01-31 09:52:32', NULL),
(37, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:53:36', '2015-01-31 09:53:36', NULL),
(38, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-01-31 09:58:16', '2015-01-31 09:58:16', NULL),
(39, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:37:42', '2015-01-31 10:37:42', NULL),
(40, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:39:03', '2015-01-31 10:39:03', NULL),
(41, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:42:40', '2015-01-31 10:42:40', NULL),
(42, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:43:04', '2015-01-31 10:43:04', NULL),
(43, 'client_get_index', 'Listado de clientes', 'Vizualización del listado de clientes', 1, 'READ', '2015-01-31 10:43:13', '2015-01-31 10:43:13', NULL),
(44, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:43:43', '2015-01-31 10:43:43', NULL),
(45, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:43:50', '2015-01-31 10:43:50', NULL),
(46, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:43:53', '2015-01-31 10:43:53', NULL),
(47, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(48, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(49, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:44:29', '2015-01-31 10:44:29', NULL),
(50, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:45:14', '2015-01-31 10:45:14', NULL),
(51, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:45:15', '2015-01-31 10:45:15', NULL),
(52, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:45:18', '2015-01-31 10:45:18', NULL),
(53, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:48:18', '2015-01-31 10:48:18', NULL),
(54, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:48:23', '2015-01-31 10:48:23', NULL),
(55, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:48:33', '2015-01-31 10:48:33', NULL),
(56, 'capability_controller_err', 'Error al agregar la capacidad', 'Error: el controlador PaymentMethodController@getIndex ya existe, intente con uno diferente.', 1, 'CREATE', '2015-01-31 10:49:27', '2015-01-31 10:49:27', NULL),
(57, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:49:28', '2015-01-31 10:49:28', NULL),
(58, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL),
(59, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL),
(60, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 10:49:59', '2015-01-31 10:49:59', NULL),
(61, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-01-31 10:50:02', '2015-01-31 10:50:02', NULL),
(62, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-01-31 10:50:06', '2015-01-31 10:50:06', NULL),
(63, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 10:50:07', '2015-01-31 10:50:07', NULL),
(64, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:50:09', '2015-01-31 10:50:09', NULL),
(65, 'payment_method_get_create', 'Añadir Métodos de Pago', 'Adición de métodos de pago', 1, 'READ', '2015-01-31 10:51:14', '2015-01-31 10:51:14', NULL),
(66, 'payment_method_create', 'Método de Pago Agregado', 'El método de pago Débito fue agregado exitosamente', 1, 'CREATE', '2015-01-31 10:52:02', '2015-01-31 10:52:02', NULL),
(67, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:52:02', '2015-01-31 10:52:02', NULL),
(68, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:52:49', '2015-01-31 10:52:49', NULL),
(69, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:54:44', '2015-01-31 10:54:44', NULL),
(70, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:55:00', '2015-01-31 10:55:00', NULL),
(71, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:55:14', '2015-01-31 10:55:14', NULL),
(72, 'payment_method_edit', 'Método de Pago editado', 'El método de pago Débito fue editado exitosamente', 1, 'UPDATE', '2015-01-31 10:57:26', '2015-01-31 10:57:26', NULL),
(73, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:57:26', '2015-01-31 10:57:26', NULL),
(74, 'payment_method_get_delete', 'Eliminar Métodos de Pago', 'Eliminar registro de métodos de pago', 1, 'READ', '2015-01-31 10:57:37', '2015-01-31 10:57:37', NULL),
(75, 'payment_method_get_delete', 'Eliminar Métodos de Pago', 'Eliminar registro de métodos de pago', 1, 'READ', '2015-01-31 10:58:13', '2015-01-31 10:58:13', NULL),
(76, 'payment_method_delete', 'Método de Pago eliminada', 'El método de pago Débito fue eliminado exitosamente', 1, 'DELETE', '2015-01-31 10:58:17', '2015-01-31 10:58:17', NULL),
(77, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:58:17', '2015-01-31 10:58:17', NULL),
(78, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-01-31 11:04:35', '2015-01-31 11:04:35', NULL),
(79, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-01-31 11:06:10', '2015-01-31 11:06:10', NULL),
(80, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-08 00:34:30', '2015-02-08 00:34:30', NULL),
(81, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 00:35:08', '2015-02-08 00:35:08', NULL),
(82, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:35:19', '2015-02-08 00:35:19', NULL),
(83, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-08 00:35:39', '2015-02-08 00:35:39', NULL),
(84, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Cuentas de Facturación fue agregada exitosamente', 1, 'CREATE', '2015-02-08 00:37:15', '2015-02-08 00:37:15', NULL),
(85, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:37:16', '2015-02-08 00:37:16', NULL),
(86, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-08 00:37:45', '2015-02-08 00:37:45', NULL),
(87, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Cuentas de Facturación fue agregada exitosamente', 1, 'CREATE', '2015-02-08 00:38:16', '2015-02-08 00:38:16', NULL),
(88, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:38:18', '2015-02-08 00:38:18', NULL),
(89, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-08 00:38:31', '2015-02-08 00:38:31', NULL),
(90, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Cuentas de Facturación fue agregada exitosamente', 1, 'CREATE', '2015-02-08 00:38:59', '2015-02-08 00:38:59', NULL),
(91, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:39:00', '2015-02-08 00:39:00', NULL),
(92, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 00:39:45', '2015-02-08 00:39:45', NULL),
(93, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-08 00:39:53', '2015-02-08 00:39:53', NULL),
(94, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 00:39:59', '2015-02-08 00:39:59', NULL),
(95, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-08 00:40:03', '2015-02-08 00:40:03', NULL),
(96, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-08 00:40:13', '2015-02-08 00:40:13', NULL),
(97, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 00:40:15', '2015-02-08 00:40:15', NULL),
(98, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 00:40:36', '2015-02-08 00:40:36', NULL),
(99, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:41:14', '2015-02-08 00:41:14', NULL),
(100, 'capability_get_edit', 'Editar capacidades', 'Edición de capacidades', 1, 'READ', '2015-02-08 00:41:30', '2015-02-08 00:41:30', NULL),
(101, 'capability_edit', 'Capacidad Editada', 'La capacidad Crear Cuentas de Facturación fue editada exitosamente', 1, 'UPDATE', '2015-02-08 00:41:39', '2015-02-08 00:41:39', NULL),
(102, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:41:41', '2015-02-08 00:41:41', NULL),
(103, 'capability_get_edit', 'Editar capacidades', 'Edición de capacidades', 1, 'READ', '2015-02-08 00:41:54', '2015-02-08 00:41:54', NULL),
(104, 'capability_edit', 'Capacidad Editada', 'La capacidad Editar Cuentas de Facturación fue editada exitosamente', 1, 'UPDATE', '2015-02-08 00:42:02', '2015-02-08 00:42:02', NULL),
(105, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:42:03', '2015-02-08 00:42:03', NULL),
(106, 'capability_get_edit', 'Editar capacidades', 'Edición de capacidades', 1, 'READ', '2015-02-08 00:42:19', '2015-02-08 00:42:19', NULL),
(107, 'capability_edit', 'Capacidad Editada', 'La capacidad Eliminar Cuentas de Facturación fue editada exitosamente', 1, 'UPDATE', '2015-02-08 00:42:29', '2015-02-08 00:42:29', NULL),
(108, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-08 00:42:30', '2015-02-08 00:42:30', NULL),
(109, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 00:42:41', '2015-02-08 00:42:41', NULL),
(110, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 00:42:46', '2015-02-08 00:42:46', NULL),
(111, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 00:50:09', '2015-02-08 00:50:09', NULL),
(112, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 00:50:28', '2015-02-08 00:50:28', NULL),
(113, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 00:51:02', '2015-02-08 00:51:02', NULL),
(114, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:03:29', '2015-02-08 01:03:29', NULL),
(115, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:07:53', '2015-02-08 01:07:53', NULL),
(116, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:09:06', '2015-02-08 01:09:06', NULL),
(117, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:11:38', '2015-02-08 01:11:38', NULL),
(118, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:12:23', '2015-02-08 01:12:23', NULL),
(119, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:12:36', '2015-02-08 01:12:36', NULL),
(120, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:13:22', '2015-02-08 01:13:22', NULL),
(121, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:18:27', '2015-02-08 01:18:27', NULL),
(122, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-08 01:28:44', '2015-02-08 01:28:44', NULL),
(123, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:28:45', '2015-02-08 01:28:45', NULL),
(124, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 01:29:02', '2015-02-08 01:29:02', NULL),
(125, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-08 01:29:09', '2015-02-08 01:29:09', NULL),
(126, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 01:30:12', '2015-02-08 01:30:12', NULL),
(127, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-08 01:30:19', '2015-02-08 01:30:19', NULL),
(128, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-08 01:31:32', '2015-02-08 01:31:32', NULL),
(129, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-08 01:31:51', '2015-02-08 01:31:51', NULL),
(130, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-08 01:31:59', '2015-02-08 01:31:59', NULL),
(131, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-02-08 01:54:44', '2015-02-08 01:54:44', NULL),
(132, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 01:54:45', '2015-02-08 01:54:45', NULL),
(133, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:54:51', '2015-02-08 01:54:51', NULL),
(134, 'invoice_account_create_image_err', 'Error al agregar el cuenta', 'El Archivo subido no cumple con los requisitos del sistema.', 1, 'CREATE', '2015-02-08 01:56:21', '2015-02-08 01:56:21', NULL),
(135, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:56:23', '2015-02-08 01:56:23', NULL),
(136, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:58:26', '2015-02-08 01:58:26', NULL),
(137, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 01:58:43', '2015-02-08 01:58:43', NULL),
(138, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 02:05:21', '2015-02-08 02:05:21', NULL),
(139, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 02:07:12', '2015-02-08 02:07:12', NULL),
(140, 'invoice_account_create', 'Cuenta Agregada', 'La cuenta Banesco  fue agregado exitosamente', 1, 'CREATE', '2015-02-08 02:08:06', '2015-02-08 02:08:06', NULL),
(141, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:08:07', '2015-02-08 02:08:07', NULL),
(142, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:09:01', '2015-02-08 02:09:01', NULL),
(143, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:10:37', '2015-02-08 02:10:37', NULL),
(144, 'invoice_account_get_edit', 'Editar Cuentas', 'Edicion de cuentas', 1, 'READ', '2015-02-08 02:14:17', '2015-02-08 02:14:17', NULL),
(145, 'invoice_account_get_edit', 'Editar Cuentas', 'Edicion de cuentas', 1, 'READ', '2015-02-08 02:15:54', '2015-02-08 02:15:54', NULL),
(146, 'invoice_account_edit', 'Cuenta Editar', 'La cuenta Banesco  fue editada exitosamente', 1, 'UPDATE', '2015-02-08 02:20:49', '2015-02-08 02:20:49', NULL),
(147, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:20:50', '2015-02-08 02:20:50', NULL),
(148, 'invoice_account_get_edit', 'Editar Cuentas', 'Edicion de cuentas', 1, 'READ', '2015-02-08 02:20:56', '2015-02-08 02:20:56', NULL),
(149, 'invoice_account_edit', 'Cuenta Editar', 'La cuenta Banesco  fue editada exitosamente', 1, 'UPDATE', '2015-02-08 02:21:23', '2015-02-08 02:21:23', NULL),
(150, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:21:25', '2015-02-08 02:21:25', NULL),
(151, 'invoice_account_get_create', 'Añadir Cuentas', 'Adición de cuentas', 1, 'READ', '2015-02-08 02:21:44', '2015-02-08 02:21:44', NULL),
(152, 'invoice_account_create', 'Cuenta Agregada', 'La cuenta Mercantil fue agregada exitosamente', 1, 'CREATE', '2015-02-08 02:22:28', '2015-02-08 02:22:28', NULL),
(153, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:22:29', '2015-02-08 02:22:29', NULL),
(154, 'invoice_account_get_delete', 'Eliminar Cuentas', 'Eliminar registro de cuentas', 1, 'READ', '2015-02-08 02:22:39', '2015-02-08 02:22:39', NULL),
(155, 'invoice_account_get_delete', 'Eliminar Cuentas', 'Eliminar registro de cuentas', 1, 'READ', '2015-02-08 02:24:26', '2015-02-08 02:24:26', NULL),
(156, 'invoice_account_delete', 'Cuenta eliminada', 'El cuenta Mercantil fue eliminado exitosamente', 1, 'DELETE', '2015-02-08 02:24:32', '2015-02-08 02:24:32', NULL),
(157, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:24:33', '2015-02-08 02:24:33', NULL),
(158, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-02-08 02:28:21', '2015-02-08 02:28:21', NULL),
(159, 'payment_method_get_create', 'Añadir Métodos de Pago', 'Adición de métodos de pago', 1, 'READ', '2015-02-08 02:28:28', '2015-02-08 02:28:28', NULL),
(160, 'payment_method_create', 'Método de Pago Agregado', 'El método de pago Crédito fue agregado exitosamente', 1, 'CREATE', '2015-02-08 02:28:50', '2015-02-08 02:28:50', NULL),
(161, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-02-08 02:28:51', '2015-02-08 02:28:51', NULL),
(162, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-02-08 02:28:57', '2015-02-08 02:28:57', NULL),
(163, 'payment_method_edit', 'Método de Pago editado', 'El método de pago Crédito fue editado exitosamente', 1, 'UPDATE', '2015-02-08 02:29:12', '2015-02-08 02:29:12', NULL),
(164, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-02-08 02:29:13', '2015-02-08 02:29:13', NULL),
(165, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-08 02:29:46', '2015-02-08 02:29:46', NULL),
(166, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-02-08 02:30:42', '2015-02-08 02:30:42', NULL),
(167, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-08 05:19:28', '2015-02-08 05:19:28', NULL),
(168, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-08 16:27:51', '2015-02-08 16:27:51', NULL),
(169, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-08 17:21:54', '2015-02-08 17:21:54', NULL),
(170, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-08 17:26:33', '2015-02-08 17:26:33', NULL),
(171, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-08 17:26:46', '2015-02-08 17:26:46', NULL),
(172, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-09 16:38:35', '2015-02-09 16:38:35', NULL),
(173, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-09 16:38:36', '2015-02-09 16:38:36', NULL),
(174, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-09 22:14:42', '2015-02-09 22:14:42', NULL),
(175, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:20:48', '2015-02-09 22:20:48', NULL),
(176, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:22:16', '2015-02-09 22:22:16', NULL),
(177, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:29:36', '2015-02-09 22:29:36', NULL),
(178, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:30:26', '2015-02-09 22:30:26', NULL),
(179, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:31:06', '2015-02-09 22:31:06', NULL),
(180, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:34:00', '2015-02-09 22:34:00', NULL),
(181, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 22:36:36', '2015-02-09 22:36:36', NULL),
(182, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:21:00', '2015-02-09 23:21:00', NULL),
(183, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-09 23:21:14', '2015-02-09 23:21:14', NULL),
(184, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-09 23:22:03', '2015-02-09 23:22:03', NULL),
(185, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:22:04', '2015-02-09 23:22:04', NULL),
(186, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-09 23:22:13', '2015-02-09 23:22:13', NULL),
(187, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-09 23:22:39', '2015-02-09 23:22:39', NULL),
(188, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:22:40', '2015-02-09 23:22:40', NULL),
(189, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-09 23:22:49', '2015-02-09 23:22:49', NULL),
(190, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-09 23:23:15', '2015-02-09 23:23:15', NULL),
(191, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:23:17', '2015-02-09 23:23:17', NULL),
(192, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-09 23:29:15', '2015-02-09 23:29:15', NULL),
(193, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:29:21', '2015-02-09 23:29:21', NULL),
(194, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-09 23:30:02', '2015-02-09 23:30:02', NULL),
(195, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-09 23:30:29', '2015-02-09 23:30:29', NULL),
(196, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-09 23:30:37', '2015-02-09 23:30:37', NULL),
(197, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-09 23:30:47', '2015-02-09 23:30:47', NULL),
(198, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-09 23:30:48', '2015-02-09 23:30:48', NULL),
(199, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:35:04', '2015-02-09 23:35:04', NULL),
(200, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:35:25', '2015-02-09 23:35:25', NULL),
(201, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:42:29', '2015-02-09 23:42:29', NULL),
(202, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:43:57', '2015-02-09 23:43:57', NULL),
(203, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-09 23:44:18', '2015-02-09 23:44:18', NULL),
(204, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:45:51', '2015-02-09 23:45:51', NULL),
(205, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-09 23:51:24', '2015-02-09 23:51:24', NULL),
(206, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-09 23:51:31', '2015-02-09 23:51:31', NULL),
(207, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:05:14', '2015-02-10 00:05:14', NULL),
(208, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:08:49', '2015-02-10 00:08:49', NULL),
(209, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:13:03', '2015-02-10 00:13:03', NULL),
(210, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:14:09', '2015-02-10 00:14:09', NULL),
(211, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:14:32', '2015-02-10 00:14:32', NULL),
(212, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:16:29', '2015-02-10 00:16:29', NULL),
(213, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:20:48', '2015-02-10 00:20:48', NULL),
(214, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:21:00', '2015-02-10 00:21:00', NULL),
(215, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:24:46', '2015-02-10 00:24:46', NULL),
(216, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 00:25:05', '2015-02-10 00:25:05', NULL),
(217, 'task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-10 00:59:21', '2015-02-10 00:59:21', NULL),
(218, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 00:59:22', '2015-02-10 00:59:22', NULL),
(219, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:23:13', '2015-02-10 01:23:13', NULL),
(220, 'task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-10 01:24:03', '2015-02-10 01:24:03', NULL),
(221, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:24:05', '2015-02-10 01:24:05', NULL),
(222, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:24:43', '2015-02-10 01:24:43', NULL),
(223, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:24:49', '2015-02-10 01:24:49', NULL),
(224, 'task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-10 01:25:36', '2015-02-10 01:25:36', NULL),
(225, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:25:38', '2015-02-10 01:25:38', NULL),
(226, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:26:01', '2015-02-10 01:26:01', NULL),
(227, 'task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-10 01:26:18', '2015-02-10 01:26:18', NULL),
(228, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:26:20', '2015-02-10 01:26:20', NULL),
(229, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:27:38', '2015-02-10 01:27:38', NULL),
(230, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:28:16', '2015-02-10 01:28:16', NULL),
(231, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:29:42', '2015-02-10 01:29:42', NULL),
(232, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:29:58', '2015-02-10 01:29:58', NULL),
(233, 'task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-10 01:30:21', '2015-02-10 01:30:21', NULL),
(234, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:30:22', '2015-02-10 01:30:22', NULL),
(235, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 01:34:12', '2015-02-10 01:34:12', NULL),
(236, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:42:24', '2015-02-10 01:42:24', NULL),
(237, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:44:21', '2015-02-10 01:44:21', NULL),
(238, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:45:38', '2015-02-10 01:45:38', NULL),
(239, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:54:13', '2015-02-10 01:54:13', NULL),
(240, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:54:40', '2015-02-10 01:54:40', NULL),
(241, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 01:54:57', '2015-02-10 01:54:57', NULL),
(242, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-02-10 02:03:03', '2015-02-10 02:03:03', NULL),
(243, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-10 02:03:21', '2015-02-10 02:03:21', NULL),
(244, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-10 02:03:35', '2015-02-10 02:03:35', NULL),
(245, 'capability_create', 'Capacidad Agregada', 'La capacidad Activación de Usuarios fue agregada exitosamente', 1, 'CREATE', '2015-02-10 02:04:16', '2015-02-10 02:04:16', NULL),
(246, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-10 02:04:17', '2015-02-10 02:04:17', NULL),
(247, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-10 02:04:42', '2015-02-10 02:04:42', NULL),
(248, 'capability_create', 'Capacidad Agregada', 'La capacidad Desactivar Usuarios fue agregada exitosamente', 1, 'CREATE', '2015-02-10 02:05:17', '2015-02-10 02:05:17', NULL),
(249, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-10 02:05:19', '2015-02-10 02:05:19', NULL),
(250, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-10 02:05:31', '2015-02-10 02:05:31', NULL),
(251, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-10 02:05:55', '2015-02-10 02:05:55', NULL),
(252, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-10 02:08:38', '2015-02-10 02:08:38', NULL),
(253, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-10 02:08:50', '2015-02-10 02:08:50', NULL),
(254, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-10 02:08:57', '2015-02-10 02:08:57', NULL),
(255, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-10 02:09:06', '2015-02-10 02:09:06', NULL),
(256, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-10 02:09:07', '2015-02-10 02:09:07', NULL),
(257, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-02-10 02:10:26', '2015-02-10 02:10:26', NULL),
(258, 'users_activate', 'Usuario activado satisfactoriamente', 'El usuario Daniel Henriquez ha sido activado exitosamente', 1, 'UPDATE', '2015-02-10 02:10:37', '2015-02-10 02:10:37', NULL),
(259, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-02-10 02:10:39', '2015-02-10 02:10:39', NULL),
(260, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:06:22', '2015-02-10 03:06:22', NULL),
(261, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:07:25', '2015-02-10 03:07:25', NULL),
(262, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:08:36', '2015-02-10 03:08:36', NULL),
(263, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:10:33', '2015-02-10 03:10:33', NULL),
(264, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:11:02', '2015-02-10 03:11:02', NULL),
(265, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:18:32', '2015-02-10 03:18:32', NULL),
(266, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:23:18', '2015-02-10 03:23:18', NULL),
(267, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:31:30', '2015-02-10 03:31:30', NULL),
(268, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:31:44', '2015-02-10 03:31:44', NULL),
(269, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:32:00', '2015-02-10 03:32:00', NULL),
(270, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:33:28', '2015-02-10 03:33:28', NULL),
(271, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:43:09', '2015-02-10 03:43:09', NULL),
(272, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:43:22', '2015-02-10 03:43:22', NULL),
(273, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:43:23', '2015-02-10 03:43:23', NULL),
(274, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:45:09', '2015-02-10 03:45:09', NULL),
(275, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:45:59', '2015-02-10 03:45:59', NULL),
(276, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:46:29', '2015-02-10 03:46:29', NULL),
(277, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:46:31', '2015-02-10 03:46:31', NULL),
(278, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:46:37', '2015-02-10 03:46:37', NULL),
(279, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:47:22', '2015-02-10 03:47:22', NULL),
(280, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:47:48', '2015-02-10 03:47:48', NULL),
(281, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:48:28', '2015-02-10 03:48:28', NULL),
(282, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:48:42', '2015-02-10 03:48:42', NULL),
(283, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:48:47', '2015-02-10 03:48:47', NULL),
(284, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:49:53', '2015-02-10 03:49:53', NULL),
(285, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-10 03:49:58', '2015-02-10 03:49:58', NULL),
(286, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:50:02', '2015-02-10 03:50:02', NULL),
(287, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:50:08', '2015-02-10 03:50:08', NULL),
(288, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:50:18', '2015-02-10 03:50:18', NULL),
(289, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:52:24', '2015-02-10 03:52:24', NULL),
(290, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:52:30', '2015-02-10 03:52:30', NULL),
(291, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:52:32', '2015-02-10 03:52:32', NULL),
(292, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:55:36', '2015-02-10 03:55:36', NULL),
(293, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:55:56', '2015-02-10 03:55:56', NULL),
(294, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:56:15', '2015-02-10 03:56:15', NULL),
(295, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:56:28', '2015-02-10 03:56:28', NULL),
(296, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:56:29', '2015-02-10 03:56:29', NULL),
(297, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:56:35', '2015-02-10 03:56:35', NULL),
(298, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:56:52', '2015-02-10 03:56:52', NULL),
(299, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:56:53', '2015-02-10 03:56:53', NULL),
(300, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:56:58', '2015-02-10 03:56:58', NULL),
(301, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:57:12', '2015-02-10 03:57:12', NULL),
(302, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:57:13', '2015-02-10 03:57:13', NULL),
(303, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-10 03:57:20', '2015-02-10 03:57:20', NULL),
(304, 'task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-10 03:57:33', '2015-02-10 03:57:33', NULL),
(305, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 03:57:34', '2015-02-10 03:57:34', NULL),
(306, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:00:23', '2015-02-10 04:00:23', NULL),
(307, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:09:36', '2015-02-10 04:09:36', NULL),
(308, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:10:08', '2015-02-10 04:10:08', NULL),
(309, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:10:29', '2015-02-10 04:10:29', NULL),
(310, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:11:41', '2015-02-10 04:11:41', NULL),
(311, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:11:59', '2015-02-10 04:11:59', NULL),
(312, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:14:32', '2015-02-10 04:14:32', NULL),
(313, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:19:14', '2015-02-10 04:19:14', NULL),
(314, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:19:27', '2015-02-10 04:19:27', NULL),
(315, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:20:06', '2015-02-10 04:20:06', NULL),
(316, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:21:31', '2015-02-10 04:21:31', NULL),
(317, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:39:13', '2015-02-10 04:39:13', NULL),
(318, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:40:19', '2015-02-10 04:40:19', NULL),
(319, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:41:16', '2015-02-10 04:41:16', NULL),
(320, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:42:14', '2015-02-10 04:42:14', NULL),
(321, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:46:33', '2015-02-10 04:46:33', NULL),
(322, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:47:07', '2015-02-10 04:47:07', NULL),
(323, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:47:58', '2015-02-10 04:47:58', NULL),
(324, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:49:36', '2015-02-10 04:49:36', NULL),
(325, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 04:51:49', '2015-02-10 04:51:49', NULL),
(326, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:02:49', '2015-02-10 05:02:49', NULL),
(327, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:15:29', '2015-02-10 05:15:29', NULL),
(328, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:16:54', '2015-02-10 05:16:54', NULL),
(329, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:21:08', '2015-02-10 05:21:08', NULL),
(330, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:21:23', '2015-02-10 05:21:23', NULL),
(331, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:22:30', '2015-02-10 05:22:30', NULL),
(332, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:25:51', '2015-02-10 05:25:51', NULL),
(333, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:26:12', '2015-02-10 05:26:12', NULL),
(334, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:26:44', '2015-02-10 05:26:44', NULL),
(335, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 05:42:39', '2015-02-10 05:42:39', NULL),
(336, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:03:07', '2015-02-10 06:03:07', NULL),
(337, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:03:52', '2015-02-10 06:03:52', NULL),
(338, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:17:52', '2015-02-10 06:17:52', NULL),
(339, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:19:20', '2015-02-10 06:19:20', NULL),
(340, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:20:22', '2015-02-10 06:20:22', NULL),
(341, 'tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Inicio del Proyecto ha sido finalizada exitosamente', 1, 'UPDATE', '2015-02-10 06:20:32', '2015-02-10 06:20:32', NULL),
(342, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:20:33', '2015-02-10 06:20:33', NULL),
(343, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:21:32', '2015-02-10 06:21:32', NULL),
(344, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:21:49', '2015-02-10 06:21:49', NULL),
(345, 'tasks_undone', 'Tarea regresada satisfactoriamente', 'La tarea Inicio del Proyecto ha sido regresada exitosamente', 1, 'UPDATE', '2015-02-10 06:22:58', '2015-02-10 06:22:58', NULL),
(346, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:22:59', '2015-02-10 06:22:59', NULL),
(347, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-10 06:24:52', '2015-02-10 06:24:52', NULL);
INSERT INTO `audits` (`id`, `name`, `title`, `description`, `id_user`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(348, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-11 01:26:00', '2015-02-11 01:26:00', NULL),
(349, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-14 00:37:09', '2015-02-14 00:37:09', NULL),
(350, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-14 01:06:50', '2015-02-14 01:06:50', NULL),
(351, 'tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Inicio del Proyecto ha sido finalizada exitosamente', 1, 'UPDATE', '2015-02-14 01:06:58', '2015-02-14 01:06:58', NULL),
(352, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-14 01:07:00', '2015-02-14 01:07:00', NULL),
(353, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-14 01:11:47', '2015-02-14 01:11:47', NULL),
(354, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-16 15:51:07', '2015-02-16 15:51:07', NULL),
(355, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:35:17', '2015-02-16 17:35:17', NULL),
(356, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:37:40', '2015-02-16 17:37:40', NULL),
(357, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:38:05', '2015-02-16 17:38:05', NULL),
(358, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:38:23', '2015-02-16 17:38:23', NULL),
(359, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:39:45', '2015-02-16 17:39:45', NULL),
(360, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:40:35', '2015-02-16 17:40:35', NULL),
(361, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:40:44', '2015-02-16 17:40:44', NULL),
(362, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:40:57', '2015-02-16 17:40:57', NULL),
(363, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:41:16', '2015-02-16 17:41:16', NULL),
(364, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:43:27', '2015-02-16 17:43:27', NULL),
(365, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:43:48', '2015-02-16 17:43:48', NULL),
(366, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:44:10', '2015-02-16 17:44:10', NULL),
(367, 'my_task_create_err', 'Error al agregar la tarea', 'Debe Seleccionar una Tarea Padre.', 1, 'CREATE', '2015-02-16 17:46:27', '2015-02-16 17:46:27', NULL),
(368, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-16 17:46:29', '2015-02-16 17:46:29', NULL),
(369, 'my_task_create', 'Tarea agregada', 'La tarea  fue agregada exitosamente', 1, 'CREATE', '2015-02-16 17:46:51', '2015-02-16 17:46:51', NULL),
(370, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:46:52', '2015-02-16 17:46:52', NULL),
(371, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-16 17:49:04', '2015-02-16 17:49:04', NULL),
(372, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-16 17:49:25', '2015-02-16 17:49:25', NULL),
(373, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:53:23', '2015-02-16 17:53:23', NULL),
(374, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:54:15', '2015-02-16 17:54:15', NULL),
(375, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:54:36', '2015-02-16 17:54:36', NULL),
(376, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:55:32', '2015-02-16 17:55:32', NULL),
(377, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:56:06', '2015-02-16 17:56:06', NULL),
(378, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:56:22', '2015-02-16 17:56:22', NULL),
(379, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:57:00', '2015-02-16 17:57:00', NULL),
(380, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:58:43', '2015-02-16 17:58:43', NULL),
(381, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 17:59:34', '2015-02-16 17:59:34', NULL),
(382, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 18:01:22', '2015-02-16 18:01:22', NULL),
(383, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-16 18:01:54', '2015-02-16 18:01:54', NULL),
(384, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-17 02:50:04', '2015-02-17 02:50:04', NULL),
(385, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-17 03:21:34', '2015-02-17 03:21:34', NULL),
(386, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-17 03:24:27', '2015-02-17 03:24:27', NULL),
(387, 'my_tasks_undone', 'Tarea regresada satisfactoriamente', 'La tarea Inicio del Proyecto ha sido regresada exitosamente', 1, 'UPDATE', '2015-02-17 03:24:53', '2015-02-17 03:24:53', NULL),
(388, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-17 03:24:54', '2015-02-17 03:24:54', NULL),
(389, 'my_tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Media Tarea ha sido finalizada exitosamente', 1, 'UPDATE', '2015-02-17 03:25:05', '2015-02-17 03:25:05', NULL),
(390, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-17 03:25:07', '2015-02-17 03:25:07', NULL),
(391, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-17 03:25:39', '2015-02-17 03:25:39', NULL),
(392, 'auth_logout', 'Cierre de Sesión', 'El usuario AlexanderZon ha Cerrado Sesión', 1, 'DELETE', '2015-02-17 03:29:27', '2015-02-17 03:29:27', NULL),
(393, 'auth_login', 'Inicio de Sesión', 'El usuario robertdacorte ha Iniciado Sesión', 2, 'CREATE', '2015-02-17 03:29:52', '2015-02-17 03:29:52', NULL),
(394, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 2, 'READ', '2015-02-17 03:32:00', '2015-02-17 03:32:00', NULL),
(395, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 2, 'READ', '2015-02-17 03:32:24', '2015-02-17 03:32:24', NULL),
(396, 'category_get_index', 'Categorias', 'Vizualización de Categorias', 2, 'READ', '2015-02-17 03:32:35', '2015-02-17 03:32:35', NULL),
(397, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:32:48', '2015-02-17 03:32:48', NULL),
(398, 'my_tasks_activate', 'Tarea iniciada satisfactoriamente', 'La tarea Tercera Tarea ha sido iniciada exitosamente', 2, 'UPDATE', '2015-02-17 03:33:17', '2015-02-17 03:33:17', NULL),
(399, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:33:19', '2015-02-17 03:33:19', NULL),
(400, 'my_tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Tercera Tarea ha sido finalizada exitosamente', 2, 'UPDATE', '2015-02-17 03:33:33', '2015-02-17 03:33:33', NULL),
(401, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:33:35', '2015-02-17 03:33:35', NULL),
(402, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 2, 'READ', '2015-02-17 03:33:49', '2015-02-17 03:33:49', NULL),
(403, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:33:55', '2015-02-17 03:33:55', NULL),
(404, 'tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Inicio del Proyecto ha sido finalizada exitosamente', 2, 'UPDATE', '2015-02-17 03:34:01', '2015-02-17 03:34:01', NULL),
(405, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:34:02', '2015-02-17 03:34:02', NULL),
(406, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:34:09', '2015-02-17 03:34:09', NULL),
(407, 'my_tasks_activate', 'Tarea iniciada satisfactoriamente', 'La tarea Finalizar Proyecto ha sido iniciada exitosamente', 2, 'UPDATE', '2015-02-17 03:34:15', '2015-02-17 03:34:15', NULL),
(408, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:34:16', '2015-02-17 03:34:16', NULL),
(409, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:35:36', '2015-02-17 03:35:36', NULL),
(410, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:36:22', '2015-02-17 03:36:22', NULL),
(411, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:37:28', '2015-02-17 03:37:28', NULL),
(412, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 2, 'READ', '2015-02-17 03:38:16', '2015-02-17 03:38:16', NULL),
(413, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 2, 'READ', '2015-02-17 03:44:15', '2015-02-17 03:44:15', NULL),
(414, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 2, 'READ', '2015-02-17 03:51:40', '2015-02-17 03:51:40', NULL),
(415, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 2, 'READ', '2015-02-17 03:54:27', '2015-02-17 03:54:27', NULL),
(416, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 2, 'READ', '2015-02-17 03:55:35', '2015-02-17 03:55:35', NULL),
(417, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 2, 'READ', '2015-02-17 03:58:01', '2015-02-17 03:58:01', NULL),
(418, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-18 02:45:03', '2015-02-18 02:45:03', NULL),
(419, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-18 02:45:05', '2015-02-18 02:45:05', NULL),
(420, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-19 14:33:47', '2015-02-19 14:33:47', NULL),
(421, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-19 14:33:49', '2015-02-19 14:33:49', NULL),
(422, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 14:34:00', '2015-02-19 14:34:00', NULL),
(423, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:34:02', '2015-02-19 14:34:02', NULL),
(424, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:35:00', '2015-02-19 14:35:00', NULL),
(425, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:35:07', '2015-02-19 14:35:07', NULL),
(426, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Mis Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:35:55', '2015-02-19 14:35:55', NULL),
(427, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:35:55', '2015-02-19 14:35:55', NULL),
(428, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:35:58', '2015-02-19 14:35:58', NULL),
(429, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Mis Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:36:25', '2015-02-19 14:36:25', NULL),
(430, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:36:26', '2015-02-19 14:36:26', NULL),
(431, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:36:29', '2015-02-19 14:36:29', NULL),
(432, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Mis Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:36:55', '2015-02-19 14:36:55', NULL),
(433, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:36:55', '2015-02-19 14:36:55', NULL),
(434, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:36:57', '2015-02-19 14:36:57', NULL),
(435, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Mis Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:37:30', '2015-02-19 14:37:30', NULL),
(436, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:37:30', '2015-02-19 14:37:30', NULL),
(437, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:37:35', '2015-02-19 14:37:35', NULL),
(438, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-19 14:37:42', '2015-02-19 14:37:42', NULL),
(439, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-19 14:37:49', '2015-02-19 14:37:49', NULL),
(440, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:37:49', '2015-02-19 14:37:49', NULL),
(441, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-19 14:38:18', '2015-02-19 14:38:18', NULL),
(442, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:38:30', '2015-02-19 14:38:30', NULL),
(443, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:38:33', '2015-02-19 14:38:33', NULL),
(444, 'capability_create', 'Capacidad Agregada', 'La capacidad Activar Roles fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:39:14', '2015-02-19 14:39:14', NULL),
(445, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:39:14', '2015-02-19 14:39:14', NULL),
(446, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:39:16', '2015-02-19 14:39:16', NULL),
(447, 'capability_create', 'Capacidad Agregada', 'La capacidad Desactivar Roles fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:39:39', '2015-02-19 14:39:39', NULL),
(448, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:39:39', '2015-02-19 14:39:39', NULL),
(449, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:39:42', '2015-02-19 14:39:42', NULL),
(450, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:39:42', '2015-02-19 14:39:42', NULL),
(451, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-19 14:39:44', '2015-02-19 14:39:44', NULL),
(452, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-19 14:39:48', '2015-02-19 14:39:48', NULL),
(453, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:39:48', '2015-02-19 14:39:48', NULL),
(454, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 14:40:12', '2015-02-19 14:40:12', NULL),
(455, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:40:16', '2015-02-19 14:40:16', NULL),
(456, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 14:40:22', '2015-02-19 14:40:22', NULL),
(457, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:40:25', '2015-02-19 14:40:25', NULL),
(458, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:40:41', '2015-02-19 14:40:41', NULL),
(459, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:41:30', '2015-02-19 14:41:30', NULL),
(460, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:41:41', '2015-02-19 14:41:41', NULL),
(461, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:41:52', '2015-02-19 14:41:52', NULL),
(462, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:42:16', '2015-02-19 14:42:16', NULL),
(463, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:43:00', '2015-02-19 14:43:00', NULL),
(464, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:43:03', '2015-02-19 14:43:03', NULL),
(465, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:43:04', '2015-02-19 14:43:04', NULL),
(466, 'capability_get_edit', 'Editar capacidades', 'Edición de capacidades', 1, 'READ', '2015-02-19 14:43:11', '2015-02-19 14:43:11', NULL),
(467, 'capability_edit', 'Capacidad Editada', 'La capacidad Visualizar Mis Tareas fue editada exitosamente', 1, 'UPDATE', '2015-02-19 14:43:17', '2015-02-19 14:43:17', NULL),
(468, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:43:17', '2015-02-19 14:43:17', NULL),
(469, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:43:23', '2015-02-19 14:43:23', NULL),
(470, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:43:42', '2015-02-19 14:43:42', NULL),
(471, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:43:45', '2015-02-19 14:43:45', NULL),
(472, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Detalle de Mis Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:44:18', '2015-02-19 14:44:18', NULL),
(473, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:44:18', '2015-02-19 14:44:18', NULL),
(474, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-19 14:44:22', '2015-02-19 14:44:22', NULL),
(475, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Detalle de Tareas fue agregada exitosamente', 1, 'CREATE', '2015-02-19 14:44:45', '2015-02-19 14:44:45', NULL),
(476, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-19 14:44:45', '2015-02-19 14:44:45', NULL),
(477, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:44:47', '2015-02-19 14:44:47', NULL),
(478, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-19 14:44:49', '2015-02-19 14:44:49', NULL),
(479, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-19 14:44:52', '2015-02-19 14:44:52', NULL),
(480, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-19 14:44:53', '2015-02-19 14:44:53', NULL),
(481, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 14:44:56', '2015-02-19 14:44:56', NULL),
(482, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 14:44:58', '2015-02-19 14:44:58', NULL),
(483, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:00:21', '2015-02-19 15:00:21', NULL),
(484, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:03:14', '2015-02-19 15:03:14', NULL),
(485, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:03:26', '2015-02-19 15:03:26', NULL),
(486, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:04:42', '2015-02-19 15:04:42', NULL),
(487, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:05:05', '2015-02-19 15:05:05', NULL),
(488, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:05:09', '2015-02-19 15:05:09', NULL),
(489, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-02-19 15:07:19', '2015-02-19 15:07:19', NULL),
(490, 'invoice_account_get_edit', 'Editar Cuentas', 'Edicion de cuentas', 1, 'READ', '2015-02-19 15:07:22', '2015-02-19 15:07:22', NULL),
(491, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:09:52', '2015-02-19 15:09:52', NULL),
(492, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:09:55', '2015-02-19 15:09:55', NULL),
(493, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:10:04', '2015-02-19 15:10:04', NULL),
(494, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:10:38', '2015-02-19 15:10:38', NULL),
(495, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:11:05', '2015-02-19 15:11:05', NULL),
(496, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:12:14', '2015-02-19 15:12:14', NULL),
(497, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:14:29', '2015-02-19 15:14:29', NULL),
(498, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:14:33', '2015-02-19 15:14:33', NULL),
(499, 'my_task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-19 15:14:56', '2015-02-19 15:14:56', NULL),
(500, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:14:56', '2015-02-19 15:14:56', NULL),
(501, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:15:19', '2015-02-19 15:15:19', NULL),
(502, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 15:16:27', '2015-02-19 15:16:27', NULL),
(503, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:16:29', '2015-02-19 15:16:29', NULL),
(504, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:16:32', '2015-02-19 15:16:32', NULL),
(505, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:17:25', '2015-02-19 15:17:25', NULL),
(506, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:17:37', '2015-02-19 15:17:37', NULL),
(507, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:17:43', '2015-02-19 15:17:43', NULL),
(508, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:19:00', '2015-02-19 15:19:00', NULL),
(509, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:19:03', '2015-02-19 15:19:03', NULL),
(510, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:19:06', '2015-02-19 15:19:06', NULL),
(511, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:19:35', '2015-02-19 15:19:35', NULL),
(512, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 15:19:40', '2015-02-19 15:19:40', NULL),
(513, 'project_get_create', 'Añadir proyecto', 'Adición de proyectos', 1, 'READ', '2015-02-19 15:19:42', '2015-02-19 15:19:42', NULL),
(514, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 15:19:46', '2015-02-19 15:19:46', NULL),
(515, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:19:47', '2015-02-19 15:19:47', NULL),
(516, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:19:49', '2015-02-19 15:19:49', NULL),
(517, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:19:52', '2015-02-19 15:19:52', NULL),
(518, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:19:54', '2015-02-19 15:19:54', NULL),
(519, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:19:58', '2015-02-19 15:19:58', NULL),
(520, 'task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:20:01', '2015-02-19 15:20:01', NULL),
(521, 'task_get_index', 'Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:20:04', '2015-02-19 15:20:04', NULL),
(522, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:20:05', '2015-02-19 15:20:05', NULL),
(523, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:20:08', '2015-02-19 15:20:08', NULL),
(524, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:20:12', '2015-02-19 15:20:12', NULL),
(525, 'my_task_get_create', 'Añadir tareas', 'Adición de tareas', 1, 'READ', '2015-02-19 15:20:13', '2015-02-19 15:20:13', NULL),
(526, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:20:16', '2015-02-19 15:20:16', NULL),
(527, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:21:07', '2015-02-19 15:21:07', NULL),
(528, 'my_task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-19 15:21:14', '2015-02-19 15:21:14', NULL),
(529, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:21:15', '2015-02-19 15:21:15', NULL),
(530, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:21:23', '2015-02-19 15:21:23', NULL),
(531, 'my_task_edit', 'Tarea editada', 'La tarea  fue editada exitosamente', 1, 'CREATE', '2015-02-19 15:21:52', '2015-02-19 15:21:52', NULL),
(532, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:21:52', '2015-02-19 15:21:52', NULL),
(533, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:22:36', '2015-02-19 15:22:36', NULL),
(534, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:23:11', '2015-02-19 15:23:11', NULL),
(535, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:23:23', '2015-02-19 15:23:23', NULL),
(536, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:23:41', '2015-02-19 15:23:41', NULL),
(537, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:24:02', '2015-02-19 15:24:02', NULL),
(538, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:24:35', '2015-02-19 15:24:35', NULL),
(539, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:24:45', '2015-02-19 15:24:45', NULL),
(540, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:27:36', '2015-02-19 15:27:36', NULL),
(541, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:28:11', '2015-02-19 15:28:11', NULL),
(542, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:28:13', '2015-02-19 15:28:13', NULL),
(543, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:28:21', '2015-02-19 15:28:21', NULL),
(544, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:28:29', '2015-02-19 15:28:29', NULL),
(545, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:28:31', '2015-02-19 15:28:31', NULL),
(546, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:28:40', '2015-02-19 15:28:40', NULL),
(547, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:28:47', '2015-02-19 15:28:47', NULL),
(548, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:30:39', '2015-02-19 15:30:39', NULL),
(549, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:31:35', '2015-02-19 15:31:35', NULL),
(550, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:31:53', '2015-02-19 15:31:53', NULL),
(551, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:32:05', '2015-02-19 15:32:05', NULL),
(552, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:32:19', '2015-02-19 15:32:19', NULL),
(553, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:32:26', '2015-02-19 15:32:26', NULL),
(554, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:32:35', '2015-02-19 15:32:35', NULL),
(555, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:32:53', '2015-02-19 15:32:53', NULL),
(556, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:33:06', '2015-02-19 15:33:06', NULL),
(557, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:33:15', '2015-02-19 15:33:15', NULL),
(558, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:33:32', '2015-02-19 15:33:32', NULL),
(559, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:33:42', '2015-02-19 15:33:42', NULL),
(560, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:35:17', '2015-02-19 15:35:17', NULL),
(561, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:35:31', '2015-02-19 15:35:31', NULL),
(562, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:35:45', '2015-02-19 15:35:45', NULL),
(563, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:36:07', '2015-02-19 15:36:07', NULL),
(564, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:36:21', '2015-02-19 15:36:21', NULL),
(565, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:36:32', '2015-02-19 15:36:32', NULL),
(566, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:36:40', '2015-02-19 15:36:40', NULL),
(567, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:37:08', '2015-02-19 15:37:08', NULL),
(568, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:37:31', '2015-02-19 15:37:31', NULL),
(569, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:39:19', '2015-02-19 15:39:19', NULL),
(570, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:39:28', '2015-02-19 15:39:28', NULL),
(571, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:39:32', '2015-02-19 15:39:32', NULL),
(572, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:40:31', '2015-02-19 15:40:31', NULL),
(573, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:40:41', '2015-02-19 15:40:41', NULL),
(574, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:41:08', '2015-02-19 15:41:08', NULL),
(575, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:41:27', '2015-02-19 15:41:27', NULL),
(576, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:42:32', '2015-02-19 15:42:32', NULL),
(577, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:42:56', '2015-02-19 15:42:56', NULL),
(578, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:44:08', '2015-02-19 15:44:08', NULL),
(579, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:44:26', '2015-02-19 15:44:26', NULL),
(580, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:44:38', '2015-02-19 15:44:38', NULL),
(581, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:45:14', '2015-02-19 15:45:14', NULL),
(582, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:45:41', '2015-02-19 15:45:41', NULL),
(583, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:45:55', '2015-02-19 15:45:55', NULL),
(584, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:46:22', '2015-02-19 15:46:22', NULL),
(585, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:46:48', '2015-02-19 15:46:48', NULL),
(586, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:46:54', '2015-02-19 15:46:54', NULL),
(587, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:47:00', '2015-02-19 15:47:00', NULL),
(588, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:48:50', '2015-02-19 15:48:50', NULL),
(589, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:49:03', '2015-02-19 15:49:03', NULL),
(590, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:49:25', '2015-02-19 15:49:25', NULL),
(591, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:50:54', '2015-02-19 15:50:54', NULL),
(592, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:51:03', '2015-02-19 15:51:03', NULL),
(593, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:51:15', '2015-02-19 15:51:15', NULL),
(594, 'my_tasks_activate', 'Tarea iniciada satisfactoriamente', 'La tarea Titulo ha sido iniciada exitosamente', 1, 'UPDATE', '2015-02-19 15:51:19', '2015-02-19 15:51:19', NULL),
(595, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:51:19', '2015-02-19 15:51:19', NULL),
(596, 'task_get_edit', 'Editar tareas', 'Edición de tareas', 1, 'READ', '2015-02-19 15:51:22', '2015-02-19 15:51:22', NULL),
(597, 'my_tasks_done', 'Tarea finalizada satisfactoriamente', 'El tarea Titulo ha sido finalizada exitosamente', 1, 'UPDATE', '2015-02-19 15:51:25', '2015-02-19 15:51:25', NULL),
(598, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:51:25', '2015-02-19 15:51:25', NULL),
(599, 'task_get_show', 'Visualizar Detalle de mis tareas', 'Visualización Detallada de tareas', 1, 'READ', '2015-02-19 15:54:15', '2015-02-19 15:54:15', NULL),
(600, 'my_task_get_index', 'Mis Tareas', 'Vizualización de Tareas', 1, 'READ', '2015-02-19 15:54:18', '2015-02-19 15:54:18', NULL),
(601, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-19 15:54:20', '2015-02-19 15:54:20', NULL),
(602, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-19 15:55:26', '2015-02-19 15:55:26', NULL),
(603, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-21 14:55:07', '2015-02-21 14:55:07', NULL),
(604, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-21 14:55:17', '2015-02-21 14:55:17', NULL),
(605, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 14:56:19', '2015-02-21 14:56:19', NULL),
(606, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 14:56:33', '2015-02-21 14:56:33', NULL),
(607, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 14:56:48', '2015-02-21 14:56:48', NULL),
(608, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 14:57:20', '2015-02-21 14:57:20', NULL),
(609, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Materiales fue agregada exitosamente', 1, 'CREATE', '2015-02-21 14:57:53', '2015-02-21 14:57:53', NULL),
(610, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 14:57:54', '2015-02-21 14:57:54', NULL),
(611, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 15:03:06', '2015-02-21 15:03:06', NULL),
(612, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Materiales fue agregada exitosamente', 1, 'CREATE', '2015-02-21 15:03:34', '2015-02-21 15:03:34', NULL),
(613, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 15:03:34', '2015-02-21 15:03:34', NULL),
(614, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 15:03:38', '2015-02-21 15:03:38', NULL),
(615, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Materiales fue agregada exitosamente', 1, 'CREATE', '2015-02-21 15:04:03', '2015-02-21 15:04:03', NULL),
(616, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 15:04:03', '2015-02-21 15:04:03', NULL),
(617, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 15:04:12', '2015-02-21 15:04:12', NULL),
(618, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-21 15:04:17', '2015-02-21 15:04:17', NULL),
(619, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-21 15:04:21', '2015-02-21 15:04:21', NULL),
(620, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 15:04:22', '2015-02-21 15:04:22', NULL),
(621, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 15:47:30', '2015-02-21 15:47:30', NULL),
(622, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 15:47:36', '2015-02-21 15:47:36', NULL),
(623, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 15:47:38', '2015-02-21 15:47:38', NULL),
(624, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 15:52:47', '2015-02-21 15:52:47', NULL),
(625, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:02:44', '2015-02-21 16:02:44', NULL),
(626, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:03:02', '2015-02-21 16:03:02', NULL),
(627, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:06:14', '2015-02-21 16:06:14', NULL),
(628, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:06:31', '2015-02-21 16:06:31', NULL),
(629, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:08:25', '2015-02-21 16:08:25', NULL),
(630, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:10:12', '2015-02-21 16:10:12', NULL),
(631, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:10:44', '2015-02-21 16:10:44', NULL),
(632, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:13:20', '2015-02-21 16:13:20', NULL),
(633, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:13:59', '2015-02-21 16:13:59', NULL),
(634, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:17:00', '2015-02-21 16:17:00', NULL),
(635, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:17:24', '2015-02-21 16:17:24', NULL),
(636, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:18:11', '2015-02-21 16:18:11', NULL),
(637, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:18:51', '2015-02-21 16:18:51', NULL),
(638, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:22:14', '2015-02-21 16:22:14', NULL),
(639, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:23:09', '2015-02-21 16:23:09', NULL),
(640, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:25:18', '2015-02-21 16:25:18', NULL),
(641, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:26:31', '2015-02-21 16:26:31', NULL),
(642, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:27:51', '2015-02-21 16:27:51', NULL),
(643, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:32:23', '2015-02-21 16:32:23', NULL),
(644, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:34:05', '2015-02-21 16:34:05', NULL),
(645, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:34:42', '2015-02-21 16:34:42', NULL),
(646, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:35:39', '2015-02-21 16:35:39', NULL),
(647, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:37:38', '2015-02-21 16:37:38', NULL),
(648, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:38:09', '2015-02-21 16:38:09', NULL),
(649, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:38:53', '2015-02-21 16:38:53', NULL),
(650, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:40:05', '2015-02-21 16:40:05', NULL),
(651, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:42:19', '2015-02-21 16:42:19', NULL),
(652, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:42:33', '2015-02-21 16:42:33', NULL),
(653, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:42:50', '2015-02-21 16:42:50', NULL),
(654, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:45:48', '2015-02-21 16:45:48', NULL),
(655, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:46:05', '2015-02-21 16:46:05', NULL),
(656, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:46:16', '2015-02-21 16:46:16', NULL),
(657, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:46:26', '2015-02-21 16:46:26', NULL),
(658, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:47:00', '2015-02-21 16:47:00', NULL),
(659, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:48:06', '2015-02-21 16:48:06', NULL),
(660, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:48:53', '2015-02-21 16:48:53', NULL),
(661, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:49:01', '2015-02-21 16:49:01', NULL),
(662, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:51:31', '2015-02-21 16:51:31', NULL),
(663, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:51:54', '2015-02-21 16:51:54', NULL),
(664, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:53:17', '2015-02-21 16:53:17', NULL),
(665, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:57:22', '2015-02-21 16:57:22', NULL),
(666, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:57:48', '2015-02-21 16:57:48', NULL),
(667, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 16:59:54', '2015-02-21 16:59:54', NULL),
(668, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:00:38', '2015-02-21 17:00:38', NULL),
(669, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:02:27', '2015-02-21 17:02:27', NULL),
(670, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:03:42', '2015-02-21 17:03:42', NULL),
(671, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:03:59', '2015-02-21 17:03:59', NULL),
(672, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:06:47', '2015-02-21 17:06:47', NULL),
(673, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:07:14', '2015-02-21 17:07:14', NULL),
(674, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:07:29', '2015-02-21 17:07:29', NULL),
(675, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:07:53', '2015-02-21 17:07:53', NULL),
(676, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:08:17', '2015-02-21 17:08:17', NULL),
(677, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:09:45', '2015-02-21 17:09:45', NULL),
(678, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:10:45', '2015-02-21 17:10:45', NULL),
(679, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:12:01', '2015-02-21 17:12:01', NULL),
(680, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:12:06', '2015-02-21 17:12:06', NULL),
(681, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:12:24', '2015-02-21 17:12:24', NULL),
(682, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:12:38', '2015-02-21 17:12:38', NULL),
(683, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:13:06', '2015-02-21 17:13:06', NULL),
(684, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:14:50', '2015-02-21 17:14:50', NULL),
(685, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:16:00', '2015-02-21 17:16:00', NULL),
(686, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:16:29', '2015-02-21 17:16:29', NULL),
(687, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 17:16:39', '2015-02-21 17:16:39', NULL),
(688, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 18:08:40', '2015-02-21 18:08:40', NULL),
(689, 'material_create', 'Material asignado', 'El material Clavos fue apartado al proyecto exitósamente', 1, 'CREATE', '2015-02-21 18:11:52', '2015-02-21 18:11:52', NULL),
(690, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:11:53', '2015-02-21 18:11:53', NULL),
(691, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:12:23', '2015-02-21 18:12:23', NULL),
(692, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:12:57', '2015-02-21 18:12:57', NULL),
(693, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:13:08', '2015-02-21 18:13:08', NULL),
(694, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:17:18', '2015-02-21 18:17:18', NULL),
(695, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:20:53', '2015-02-21 18:20:53', NULL),
(696, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:26:46', '2015-02-21 18:26:46', NULL),
(697, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:27:00', '2015-02-21 18:27:00', NULL),
(698, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:27:18', '2015-02-21 18:27:18', NULL),
(699, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:29:26', '2015-02-21 18:29:26', NULL),
(700, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:29:48', '2015-02-21 18:29:48', NULL),
(701, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:30:13', '2015-02-21 18:30:13', NULL),
(702, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:31:22', '2015-02-21 18:31:22', NULL),
(703, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:31:24', '2015-02-21 18:31:24', NULL),
(704, 'stock_get_create', 'Añadir items al stock', 'Vizualización del formulario para añadir items al stock', 1, 'READ', '2015-02-21 18:31:38', '2015-02-21 18:31:38', NULL),
(705, 'stock_create', 'Item agregado', 'El item  fue agregado exitosamente', 1, 'CREATE', '2015-02-21 18:32:01', '2015-02-21 18:32:01', NULL),
(706, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:32:01', '2015-02-21 18:32:01', NULL),
(707, 'stock_get_create', 'Añadir items al stock', 'Vizualización del formulario para añadir items al stock', 1, 'READ', '2015-02-21 18:32:09', '2015-02-21 18:32:09', NULL),
(708, 'stock_create', 'Item agregado', 'El item  fue agregado exitosamente', 1, 'CREATE', '2015-02-21 18:32:45', '2015-02-21 18:32:45', NULL);
INSERT INTO `audits` (`id`, `name`, `title`, `description`, `id_user`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(709, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:32:46', '2015-02-21 18:32:46', NULL),
(710, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 18:40:52', '2015-02-21 18:40:52', NULL),
(711, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:40:56', '2015-02-21 18:40:56', NULL),
(712, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 18:41:01', '2015-02-21 18:41:01', NULL),
(713, 'material_create', 'Material asignado', 'El material Cabilla 12" fue apartado al proyecto exitósamente', 1, 'CREATE', '2015-02-21 18:41:16', '2015-02-21 18:41:16', NULL),
(714, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:41:16', '2015-02-21 18:41:16', NULL),
(715, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:41:20', '2015-02-21 18:41:20', NULL),
(716, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:46:34', '2015-02-21 18:46:34', NULL),
(717, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:47:32', '2015-02-21 18:47:32', NULL),
(718, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:49:27', '2015-02-21 18:49:27', NULL),
(719, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:49:45', '2015-02-21 18:49:45', NULL),
(720, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:50:29', '2015-02-21 18:50:29', NULL),
(721, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:50:43', '2015-02-21 18:50:43', NULL),
(722, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 18:50:59', '2015-02-21 18:50:59', NULL),
(723, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 18:52:06', '2015-02-21 18:52:06', NULL),
(724, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:52:18', '2015-02-21 18:52:18', NULL),
(725, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:53:59', '2015-02-21 18:53:59', NULL),
(726, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:54:13', '2015-02-21 18:54:13', NULL),
(727, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:54:52', '2015-02-21 18:54:52', NULL),
(728, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 18:55:57', '2015-02-21 18:55:57', NULL),
(729, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 19:04:44', '2015-02-21 19:04:44', NULL),
(730, 'material_stock_create', 'Material asignado', 'El material Aceroli fue apartado al proyecto exitósamente', 1, 'CREATE', '2015-02-21 19:05:12', '2015-02-21 19:05:12', NULL),
(731, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:05:13', '2015-02-21 19:05:13', NULL),
(732, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 19:05:46', '2015-02-21 19:05:46', NULL),
(733, 'material_stock_create', 'Material asignado', 'El material Tubos 5" fue apartado al proyecto exitósamente', 1, 'CREATE', '2015-02-21 19:17:27', '2015-02-21 19:17:27', NULL),
(734, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:17:27', '2015-02-21 19:17:27', NULL),
(735, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:18:29', '2015-02-21 19:18:29', NULL),
(736, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:19:58', '2015-02-21 19:19:58', NULL),
(737, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 19:30:45', '2015-02-21 19:30:45', NULL),
(738, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 19:30:52', '2015-02-21 19:30:52', NULL),
(739, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:30:55', '2015-02-21 19:30:55', NULL),
(740, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:31:08', '2015-02-21 19:31:08', NULL),
(741, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:39:54', '2015-02-21 19:39:54', NULL),
(742, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:40:35', '2015-02-21 19:40:35', NULL),
(743, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:40:56', '2015-02-21 19:40:56', NULL),
(744, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:42:08', '2015-02-21 19:42:08', NULL),
(745, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:42:41', '2015-02-21 19:42:41', NULL),
(746, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:44:01', '2015-02-21 19:44:01', NULL),
(747, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:44:30', '2015-02-21 19:44:30', NULL),
(748, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:44:46', '2015-02-21 19:44:46', NULL),
(749, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:45:12', '2015-02-21 19:45:12', NULL),
(750, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:45:22', '2015-02-21 19:45:22', NULL),
(751, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:46:20', '2015-02-21 19:46:20', NULL),
(752, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:46:31', '2015-02-21 19:46:31', NULL),
(753, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:47:38', '2015-02-21 19:47:38', NULL),
(754, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:48:05', '2015-02-21 19:48:05', NULL),
(755, 'material_edit', 'Material editado', 'El material Aceroli fue editado exitosamente', 1, 'UPDATE', '2015-02-21 19:50:32', '2015-02-21 19:50:32', NULL),
(756, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:50:33', '2015-02-21 19:50:33', NULL),
(757, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 19:50:38', '2015-02-21 19:50:38', NULL),
(758, 'material_edit', 'Material editado', 'El material Aceroli fue editado exitosamente', 1, 'UPDATE', '2015-02-21 19:50:43', '2015-02-21 19:50:43', NULL),
(759, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:50:43', '2015-02-21 19:50:43', NULL),
(760, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:51:54', '2015-02-21 19:51:54', NULL),
(761, 'material_get_delete', 'Eliminar materiales', 'Vizualización de materiales a eliminar', 1, 'READ', '2015-02-21 19:51:58', '2015-02-21 19:51:58', NULL),
(762, 'material_delete', 'Material eliminada', 'La material Aceroli fue eliminada exitosamente', 1, 'DELETE', '2015-02-21 19:52:21', '2015-02-21 19:52:21', NULL),
(763, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:52:21', '2015-02-21 19:52:21', NULL),
(764, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 19:52:52', '2015-02-21 19:52:52', NULL),
(765, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 19:53:03', '2015-02-21 19:53:03', NULL),
(766, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 19:53:08', '2015-02-21 19:53:08', NULL),
(767, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 19:53:20', '2015-02-21 19:53:20', NULL),
(768, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 19:53:27', '2015-02-21 19:53:27', NULL),
(769, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 20:02:41', '2015-02-21 20:02:41', NULL),
(770, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:02:46', '2015-02-21 20:02:46', NULL),
(771, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 20:02:56', '2015-02-21 20:02:56', NULL),
(772, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 20:02:59', '2015-02-21 20:02:59', NULL),
(773, 'capability_create', 'Capacidad Agregada', 'La capacidad Asignar Materiales fue agregada exitosamente', 1, 'CREATE', '2015-02-21 20:03:36', '2015-02-21 20:03:36', NULL),
(774, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 20:03:36', '2015-02-21 20:03:36', NULL),
(775, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 20:03:40', '2015-02-21 20:03:40', NULL),
(776, 'capability_create', 'Capacidad Agregada', 'La capacidad Rehusar Material fue agregada exitosamente', 1, 'CREATE', '2015-02-21 20:04:00', '2015-02-21 20:04:00', NULL),
(777, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 20:04:00', '2015-02-21 20:04:00', NULL),
(778, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 20:04:03', '2015-02-21 20:04:03', NULL),
(779, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-21 20:04:05', '2015-02-21 20:04:05', NULL),
(780, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-21 20:04:09', '2015-02-21 20:04:09', NULL),
(781, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 20:04:09', '2015-02-21 20:04:09', NULL),
(782, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 20:04:12', '2015-02-21 20:04:12', NULL),
(783, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:04:15', '2015-02-21 20:04:15', NULL),
(784, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:04:49', '2015-02-21 20:04:49', NULL),
(785, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:06:08', '2015-02-21 20:06:08', NULL),
(786, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:07:22', '2015-02-21 20:07:22', NULL),
(787, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:07:30', '2015-02-21 20:07:30', NULL),
(788, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:07:44', '2015-02-21 20:07:44', NULL),
(789, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:12:13', '2015-02-21 20:12:13', NULL),
(790, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:12:29', '2015-02-21 20:12:29', NULL),
(791, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:12:45', '2015-02-21 20:12:45', NULL),
(792, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:13:24', '2015-02-21 20:13:24', NULL),
(793, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:13:42', '2015-02-21 20:13:42', NULL),
(794, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 20:16:06', '2015-02-21 20:16:06', NULL),
(795, 'materials_assign', 'Material asignado satisfactoriamente', 'El material Clavos ha sido asignado exitosamente', 1, 'UPDATE', '2015-02-21 21:22:46', '2015-02-21 21:22:46', NULL),
(796, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:22:46', '2015-02-21 21:22:46', NULL),
(797, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:23:55', '2015-02-21 21:23:55', NULL),
(798, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:24:32', '2015-02-21 21:24:32', NULL),
(799, 'materials_activate', 'Material rehusar satisfactoriamente', 'El material Clavos ha sido rehusado exitosamente', 1, 'UPDATE', '2015-02-21 21:25:00', '2015-02-21 21:25:00', NULL),
(800, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:25:00', '2015-02-21 21:25:00', NULL),
(801, 'materials_assign', 'Material asignado satisfactoriamente', 'El material Clavos ha sido asignado exitosamente', 1, 'UPDATE', '2015-02-21 21:25:10', '2015-02-21 21:25:10', NULL),
(802, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:25:10', '2015-02-21 21:25:10', NULL),
(803, 'materials_activate', 'Material rehusar satisfactoriamente', 'El material Clavos ha sido rehusado exitosamente', 1, 'UPDATE', '2015-02-21 21:34:44', '2015-02-21 21:34:44', NULL),
(804, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:34:44', '2015-02-21 21:34:44', NULL),
(805, 'materials_assign', 'Material asignado satisfactoriamente', 'El material Clavos ha sido asignado exitosamente', 1, 'UPDATE', '2015-02-21 21:34:49', '2015-02-21 21:34:49', NULL),
(806, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:34:49', '2015-02-21 21:34:49', NULL),
(807, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:40:13', '2015-02-21 21:40:13', NULL),
(808, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:40:26', '2015-02-21 21:40:26', NULL),
(809, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:40:36', '2015-02-21 21:40:36', NULL),
(810, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-21 21:40:39', '2015-02-21 21:40:39', NULL),
(811, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:40:48', '2015-02-21 21:40:48', NULL),
(812, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:41:18', '2015-02-21 21:41:18', NULL),
(813, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:41:20', '2015-02-21 21:41:20', NULL),
(814, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:42:12', '2015-02-21 21:42:12', NULL),
(815, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:42:37', '2015-02-21 21:42:37', NULL),
(816, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:42:59', '2015-02-21 21:42:59', NULL),
(817, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:44:01', '2015-02-21 21:44:01', NULL),
(818, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:44:25', '2015-02-21 21:44:25', NULL),
(819, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:45:17', '2015-02-21 21:45:17', NULL),
(820, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:45:33', '2015-02-21 21:45:33', NULL),
(821, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:46:25', '2015-02-21 21:46:25', NULL),
(822, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:47:08', '2015-02-21 21:47:08', NULL),
(823, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:47:45', '2015-02-21 21:47:45', NULL),
(824, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:48:54', '2015-02-21 21:48:54', NULL),
(825, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:49:03', '2015-02-21 21:49:03', NULL),
(826, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:49:33', '2015-02-21 21:49:33', NULL),
(827, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:51:49', '2015-02-21 21:51:49', NULL),
(828, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:53:45', '2015-02-21 21:53:45', NULL),
(829, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:55:52', '2015-02-21 21:55:52', NULL),
(830, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:56:36', '2015-02-21 21:56:36', NULL),
(831, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:56:51', '2015-02-21 21:56:51', NULL),
(832, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:56:53', '2015-02-21 21:56:53', NULL),
(833, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:57:08', '2015-02-21 21:57:08', NULL),
(834, 'material_request', 'Material solicitado', 'El material Cabilla 12" fue solicitado exitosamente', 1, 'CREATE', '2015-02-21 21:57:30', '2015-02-21 21:57:30', NULL),
(835, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:57:30', '2015-02-21 21:57:30', NULL),
(836, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:58:01', '2015-02-21 21:58:01', NULL),
(837, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:58:46', '2015-02-21 21:58:46', NULL),
(838, 'material_request', 'Material solicitado', 'El material Cabilla 12" fue solicitado exitosamente', 1, 'CREATE', '2015-02-21 21:58:59', '2015-02-21 21:58:59', NULL),
(839, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:58:59', '2015-02-21 21:58:59', NULL),
(840, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:59:20', '2015-02-21 21:59:20', NULL),
(841, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 21:59:23', '2015-02-21 21:59:23', NULL),
(842, 'material_request', 'Material solicitado', 'El material Tubos 5" fue solicitado exitosamente', 1, 'CREATE', '2015-02-21 21:59:32', '2015-02-21 21:59:32', NULL),
(843, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 21:59:32', '2015-02-21 21:59:32', NULL),
(844, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:00:21', '2015-02-21 22:00:21', NULL),
(845, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:00:32', '2015-02-21 22:00:32', NULL),
(846, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:01:05', '2015-02-21 22:01:05', NULL),
(847, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 22:05:49', '2015-02-21 22:05:49', NULL),
(848, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:05:55', '2015-02-21 22:05:55', NULL),
(849, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 22:06:51', '2015-02-21 22:06:51', NULL),
(850, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 22:08:52', '2015-02-21 22:08:52', NULL),
(851, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 22:09:35', '2015-02-21 22:09:35', NULL),
(852, 'material_get_edit', 'Editar materiales', 'Edición de materiales', 1, 'READ', '2015-02-21 22:10:14', '2015-02-21 22:10:14', NULL),
(853, 'material_request', 'Material solicitado', 'El material Tubos 5" fue solicitado exitosamente', 1, 'CREATE', '2015-02-21 22:10:37', '2015-02-21 22:10:37', NULL),
(854, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:10:37', '2015-02-21 22:10:37', NULL),
(855, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-02-21 22:13:12', '2015-02-21 22:13:12', NULL),
(856, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 22:20:03', '2015-02-21 22:20:03', NULL),
(857, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 22:20:14', '2015-02-21 22:20:14', NULL),
(858, 'capability_create', 'Capacidad Agregada', 'La capacidad Solicitar Material fue agregada exitosamente', 1, 'CREATE', '2015-02-21 22:20:45', '2015-02-21 22:20:45', NULL),
(859, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 22:20:45', '2015-02-21 22:20:45', NULL),
(860, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-21 22:20:59', '2015-02-21 22:20:59', NULL),
(861, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Material Solicitado fue agregada exitosamente', 1, 'CREATE', '2015-02-21 22:21:46', '2015-02-21 22:21:46', NULL),
(862, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 22:21:46', '2015-02-21 22:21:46', NULL),
(863, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 22:22:39', '2015-02-21 22:22:39', NULL),
(864, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-21 22:22:42', '2015-02-21 22:22:42', NULL),
(865, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-21 22:22:46', '2015-02-21 22:22:46', NULL),
(866, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 22:22:46', '2015-02-21 22:22:46', NULL),
(867, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 22:22:59', '2015-02-21 22:22:59', NULL),
(868, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:23:02', '2015-02-21 22:23:02', NULL),
(869, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 22:23:14', '2015-02-21 22:23:14', NULL),
(870, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:23:30', '2015-02-21 22:23:30', NULL),
(871, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 22:23:54', '2015-02-21 22:23:54', NULL),
(872, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 22:24:16', '2015-02-21 22:24:16', NULL),
(873, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:24:19', '2015-02-21 22:24:19', NULL),
(874, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 22:48:22', '2015-02-21 22:48:22', NULL),
(875, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:48:28', '2015-02-21 22:48:28', NULL),
(876, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:50:32', '2015-02-21 22:50:32', NULL),
(877, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:51:46', '2015-02-21 22:51:46', NULL),
(878, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:51:49', '2015-02-21 22:51:49', NULL),
(879, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:53:21', '2015-02-21 22:53:21', NULL),
(880, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:53:43', '2015-02-21 22:53:43', NULL),
(881, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:55:09', '2015-02-21 22:55:09', NULL),
(882, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 22:56:46', '2015-02-21 22:56:46', NULL),
(883, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:04:10', '2015-02-21 23:04:10', NULL),
(884, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:04:58', '2015-02-21 23:04:58', NULL),
(885, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:05:54', '2015-02-21 23:05:54', NULL),
(886, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-21 23:06:34', '2015-02-21 23:06:34', NULL),
(887, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-21 23:06:37', '2015-02-21 23:06:37', NULL),
(888, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 23:06:41', '2015-02-21 23:06:41', NULL),
(889, 'capability_get_edit', 'Editar capacidades', 'Edición de capacidades', 1, 'READ', '2015-02-21 23:07:00', '2015-02-21 23:07:00', NULL),
(890, 'capability_edit', 'Capacidad Editada', 'La capacidad Visualizar Material Solicitado fue editada exitosamente', 1, 'UPDATE', '2015-02-21 23:07:09', '2015-02-21 23:07:09', NULL),
(891, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-21 23:07:09', '2015-02-21 23:07:09', NULL),
(892, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 23:07:18', '2015-02-21 23:07:18', NULL),
(893, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 23:07:21', '2015-02-21 23:07:21', NULL),
(894, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 23:07:39', '2015-02-21 23:07:39', NULL),
(895, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:07:44', '2015-02-21 23:07:44', NULL),
(896, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:09:32', '2015-02-21 23:09:32', NULL),
(897, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-21 23:09:42', '2015-02-21 23:09:42', NULL),
(898, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 23:09:45', '2015-02-21 23:09:45', NULL),
(899, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-21 23:10:11', '2015-02-21 23:10:11', NULL),
(900, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:10:14', '2015-02-21 23:10:14', NULL),
(901, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:14:56', '2015-02-21 23:14:56', NULL),
(902, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:15:10', '2015-02-21 23:15:10', NULL),
(903, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:15:22', '2015-02-21 23:15:22', NULL),
(904, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:16:03', '2015-02-21 23:16:03', NULL),
(905, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:16:10', '2015-02-21 23:16:10', NULL),
(906, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-21 23:16:21', '2015-02-21 23:16:21', NULL),
(907, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-22 14:51:00', '2015-02-22 14:51:00', NULL),
(908, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-22 14:51:02', '2015-02-22 14:51:02', NULL),
(909, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-22 14:51:27', '2015-02-22 14:51:27', NULL),
(910, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-22 14:51:31', '2015-02-22 14:51:31', NULL),
(911, 'requests_get_index', 'Stock', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 14:51:33', '2015-02-22 14:51:33', NULL),
(912, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-22 14:51:36', '2015-02-22 14:51:36', NULL),
(913, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 14:53:26', '2015-02-22 14:53:26', NULL),
(914, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-22 14:53:33', '2015-02-22 14:53:33', NULL),
(915, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-22 14:53:50', '2015-02-22 14:53:50', NULL),
(916, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Solicitud de Material fue agregada exitosamente', 1, 'CREATE', '2015-02-22 14:54:19', '2015-02-22 14:54:19', NULL),
(917, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-22 14:54:20', '2015-02-22 14:54:20', NULL),
(918, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-22 14:54:33', '2015-02-22 14:54:33', NULL),
(919, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Solicitud de Material fue agregada exitosamente', 1, 'CREATE', '2015-02-22 14:55:20', '2015-02-22 14:55:20', NULL),
(920, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-22 14:55:21', '2015-02-22 14:55:21', NULL),
(921, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-02-22 14:55:24', '2015-02-22 14:55:24', NULL),
(922, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Solicitud de Material fue agregada exitosamente', 1, 'CREATE', '2015-02-22 14:56:00', '2015-02-22 14:56:00', NULL),
(923, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-02-22 14:56:01', '2015-02-22 14:56:01', NULL),
(924, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-22 14:56:07', '2015-02-22 14:56:07', NULL),
(925, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-02-22 14:56:09', '2015-02-22 14:56:09', NULL),
(926, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-02-22 14:56:14', '2015-02-22 14:56:14', NULL),
(927, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-02-22 14:56:14', '2015-02-22 14:56:14', NULL),
(928, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 14:56:23', '2015-02-22 14:56:23', NULL),
(929, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:56:53', '2015-02-22 14:56:53', NULL),
(930, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:57:08', '2015-02-22 14:57:08', NULL),
(931, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:57:30', '2015-02-22 14:57:30', NULL),
(932, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:57:54', '2015-02-22 14:57:54', NULL),
(933, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:59:12', '2015-02-22 14:59:12', NULL),
(934, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:59:20', '2015-02-22 14:59:20', NULL),
(935, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 14:59:34', '2015-02-22 14:59:34', NULL),
(936, 'project_get_index', 'Proyectos', 'Vizualización de Proyectos', 1, 'READ', '2015-02-22 15:00:03', '2015-02-22 15:00:03', NULL),
(937, 'material_get_index', 'Materiales', 'Vizualización de Materiales', 1, 'READ', '2015-02-22 15:00:06', '2015-02-22 15:00:06', NULL),
(938, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-22 15:00:08', '2015-02-22 15:00:08', NULL),
(939, 'material_get_create', 'Añadir materiales', 'Adición de materiales', 1, 'READ', '2015-02-22 15:00:23', '2015-02-22 15:00:23', NULL),
(940, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:01:02', '2015-02-22 15:01:02', NULL),
(941, 'requests_get_create', 'Añadir materiales solicitados', 'Vizualización del formulario para añadir materiales solicitados', 1, 'READ', '2015-02-22 15:01:05', '2015-02-22 15:01:05', NULL),
(942, 'material_create', 'Material asignado', 'El material Cabilla 12" fue apartado al proyecto exitósamente', 1, 'CREATE', '2015-02-22 15:02:44', '2015-02-22 15:02:44', NULL),
(943, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:02:45', '2015-02-22 15:02:45', NULL),
(944, 'requests_get_edit', 'Edición de materiales solicitados en requests', 'Vizualización de formulario para edición de materiales solicitados requests', 1, 'READ', '2015-02-22 15:02:56', '2015-02-22 15:02:56', NULL),
(945, 'requests_get_edit', 'Edición de materiales solicitados en requests', 'Vizualización de formulario para edición de materiales solicitados requests', 1, 'READ', '2015-02-22 15:03:12', '2015-02-22 15:03:12', NULL),
(946, 'requests_get_edit', 'Edición de materiales solicitados en requests', 'Vizualización de formulario para edición de materiales solicitados requests', 1, 'READ', '2015-02-22 15:03:27', '2015-02-22 15:03:27', NULL),
(947, 'requests_get_edit', 'Edición de materiales solicitados en requests', 'Vizualización de formulario para edición de materiales solicitados requests', 1, 'READ', '2015-02-22 15:03:57', '2015-02-22 15:03:57', NULL),
(948, 'requests_get_edit', 'Edición de materiales solicitados en requests', 'Vizualización de formulario para edición de materiales solicitados requests', 1, 'READ', '2015-02-22 15:04:58', '2015-02-22 15:04:58', NULL),
(949, 'requests_category_err', 'Error al editar Solicitud de Material', 'Solicitud no encontrada', 1, 'UPDATE', '2015-02-22 15:12:08', '2015-02-22 15:12:08', NULL),
(950, 'requests_get_edit', 'Edición de materiales solicitados', 'Vizualización de formulario para edición de materiales solicitados', 1, 'READ', '2015-02-22 15:12:08', '2015-02-22 15:12:08', NULL),
(951, 'requests_edit', 'Solicitud de Material Editada', 'La Solicitud del material Cabilla 12" fue editado exitosamente', 1, 'UPDATE', '2015-02-22 15:12:25', '2015-02-22 15:12:25', NULL),
(952, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:12:25', '2015-02-22 15:12:25', NULL),
(953, 'requests_get_edit', 'Edición de materiales solicitados', 'Vizualización de formulario para edición de materiales solicitados', 1, 'READ', '2015-02-22 15:12:30', '2015-02-22 15:12:30', NULL),
(954, 'requests_edit', 'Solicitud de Material Editada', 'La Solicitud del material Cabilla 12" fue editado exitosamente', 1, 'UPDATE', '2015-02-22 15:12:39', '2015-02-22 15:12:39', NULL),
(955, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:12:39', '2015-02-22 15:12:39', NULL),
(956, 'requests_get_edit', 'Edición de materiales solicitados', 'Vizualización de formulario para edición de materiales solicitados', 1, 'READ', '2015-02-22 15:13:30', '2015-02-22 15:13:30', NULL),
(957, 'requests_edit', 'Solicitud de Material Editada', 'La Solicitud del material Cabilla 12" fue editado exitosamente', 1, 'UPDATE', '2015-02-22 15:13:34', '2015-02-22 15:13:34', NULL),
(958, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:13:34', '2015-02-22 15:13:34', NULL),
(959, 'requests_get_edit', 'Edición de materiales solicitados', 'Vizualización de formulario para edición de materiales solicitados', 1, 'READ', '2015-02-22 15:13:39', '2015-02-22 15:13:39', NULL),
(960, 'requests_edit', 'Solicitud de Material Editada', 'La Solicitud del material Cabilla 12" fue editado exitosamente', 1, 'UPDATE', '2015-02-22 15:13:44', '2015-02-22 15:13:44', NULL),
(961, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:13:44', '2015-02-22 15:13:44', NULL),
(962, 'requests_get_delete', 'Eliminar de materiales solicitados en requests', 'Vizualización del listado de materiales solicitados para eliminar del requests', 1, 'READ', '2015-02-22 15:13:48', '2015-02-22 15:13:48', NULL),
(963, 'requests_get_delete', 'Eliminar de materiales solicitados en requests', 'Vizualización del listado de materiales solicitados para eliminar del requests', 1, 'READ', '2015-02-22 15:14:50', '2015-02-22 15:14:50', NULL),
(964, 'requests_delete', 'Item de eliminado del requests', 'El item  fue eliminado exitosamente', 1, 'DELETE', '2015-02-22 15:14:56', '2015-02-22 15:14:56', NULL),
(965, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:14:56', '2015-02-22 15:14:56', NULL),
(966, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:15:33', '2015-02-22 15:15:33', NULL),
(967, 'requests_get_delete', 'Eliminar de materiales solicitados en requests', 'Vizualización del listado de materiales solicitados para eliminar del requests', 1, 'READ', '2015-02-22 15:15:39', '2015-02-22 15:15:39', NULL),
(968, 'requests_delete', 'Item de eliminado del requests', 'El item  fue eliminado exitosamente', 1, 'DELETE', '2015-02-22 15:16:06', '2015-02-22 15:16:06', NULL),
(969, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:16:07', '2015-02-22 15:16:07', NULL),
(970, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:20:33', '2015-02-22 15:20:33', NULL),
(971, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:34:45', '2015-02-22 15:34:45', NULL),
(972, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:35:41', '2015-02-22 15:35:41', NULL),
(973, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:35:47', '2015-02-22 15:35:47', NULL),
(974, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:36:03', '2015-02-22 15:36:03', NULL),
(975, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:37:15', '2015-02-22 15:37:15', NULL),
(976, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:37:26', '2015-02-22 15:37:26', NULL),
(977, 'requests_get_index', 'Materiales Solicitados', 'Vizualización del listado de materiales solicitados', 1, 'READ', '2015-02-22 15:37:32', '2015-02-22 15:37:32', NULL),
(978, 'auth_logout', 'Cierre de Sesión', 'El usuario AlexanderZon ha Cerrado Sesión', 1, 'DELETE', '2015-02-22 15:37:57', '2015-02-22 15:37:57', NULL),
(979, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-02-22 15:48:16', '2015-02-22 15:48:16', NULL),
(980, 'dashboard_get_index', 'Escritorio', 'Vizualización del Escritorio', 1, 'READ', '2015-02-22 15:48:17', '2015-02-22 15:48:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capabilities`
--

CREATE TABLE IF NOT EXISTS `capabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=81 ;

--
-- Volcado de datos para la tabla `capabilities`
--

INSERT INTO `capabilities` (`id`, `name`, `title`, `description`, `controller`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dashboard_view_get', 'Visualizar Escritorio', '', 'DashboardController@getIndex', '2015-01-26 16:15:12', '2015-01-26 16:23:27', NULL),
(2, 'users_view_get', 'Visualizar Usuarios', '', 'UserController@getIndex', '2015-01-26 16:15:12', '2015-01-26 16:39:34', NULL),
(3, 'users_create_get', 'Crear Usuarios', '', 'UserController@getCreate', '2015-01-26 16:15:12', '2015-01-26 16:38:44', NULL),
(4, 'users_edit_get', 'Editar Usuarios', '', 'UserController@getEdit', '2015-01-26 16:15:12', '2015-01-26 16:39:01', NULL),
(5, 'users_delete_get', 'Eliminar Usuarios', '', 'UserController@getDelete', '2015-01-26 16:15:12', '2015-01-26 16:39:16', NULL),
(6, 'capabilities_view_get', 'Visualizar Capacidades', '', 'CapabilityController@getIndex', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(7, 'capabilities_create_get', 'Crear Capacidades', '', 'CapabilityController@getCreate', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(8, 'capabilities_edit_get', 'Editar Capacidades', '', 'CapabilityController@getEdit', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(9, 'capabilities_delete_get', 'Eliminar Capacidades', '', 'CapabilityController@getDelete', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(10, 'roles_view_get', 'Visualizar Roles', '', 'RoleController@getIndex', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(11, 'roles_create_get', 'Crear Roles', '', 'RoleController@getCreate', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(12, 'roles_edit_get', 'Editar Roles', '', 'RoleController@getEdit', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(13, 'roles_delete_get', 'Eliminar Roles', '', 'RoleController@getDelete', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(14, 'roles_assign_get', 'Asignar Capacidades ', '', 'RoleController@getAssign', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(15, 'stock_view_get', 'Visualizar Stock', '', 'StockController@getIndex', '2015-01-28 00:49:36', '2015-01-28 00:49:36', NULL),
(16, 'stock_create_get', 'Crear Items de Stock', '', 'StockController@getCreate', '2015-01-28 00:50:14', '2015-01-28 00:50:14', NULL),
(17, 'stock_edit_get', 'Editar Stock', '', 'StockController@getEdit', '2015-01-28 00:50:44', '2015-01-28 00:50:44', NULL),
(18, 'stock_delete_get', 'Eliminar Stock', '', 'StockController@getDelete', '2015-01-28 00:51:49', '2015-01-28 00:51:49', NULL),
(19, 'categories_view_get', 'Visualizar Categorias', '', 'CategoryController@getIndex', '2015-01-28 00:53:28', '2015-01-28 00:53:28', NULL),
(20, 'categories_create_get', 'Crear Categorias', '', 'CategoryController@getCreate', '2015-01-28 00:54:15', '2015-01-28 00:54:15', NULL),
(21, 'categories_edit_get', 'Editar Categorias', '', 'CategoryController@getEdit', '2015-01-28 00:55:16', '2015-01-28 00:55:16', NULL),
(22, 'categories_delete_get', 'Eliminar Categorias', '', 'CategoryController@getDelete', '2015-01-28 00:55:49', '2015-01-28 00:55:49', NULL),
(23, 'measurement_units_view_get', 'Visualizar Unidades de Medida', '', 'MeasurementUnitController@getIndex', '2015-01-28 00:58:17', '2015-01-28 00:58:17', NULL),
(24, 'measurement_units_create_get', 'Crear Unidades de Medida', '', 'MeasurementUnitController@getCreate', '2015-01-28 00:59:09', '2015-01-28 00:59:09', NULL),
(25, 'measurement_units_edit_get', 'Editar Unidades de Medida', '', 'MeasurementUnitController@getEdit', '2015-01-28 00:59:42', '2015-01-28 00:59:42', NULL),
(26, 'measurement_units_delete_get', 'Eliminar Unidades de Medida', '', 'MeasurementUnitController@getDelete', '2015-01-28 01:00:22', '2015-01-28 01:00:22', NULL),
(27, 'clients_view_get', 'Visualizar Clientes', '', 'ClientController@getIndex', '2015-01-28 01:38:05', '2015-01-28 01:38:05', NULL),
(28, 'clients_create_get', 'Crear Clientes', '', 'ClientController@getCreate', '2015-01-28 01:38:28', '2015-01-28 01:38:28', NULL),
(29, 'clients_edit_get', 'Editar Clientes', '', 'ClientController@getEdit', '2015-01-28 01:39:09', '2015-01-28 01:39:09', NULL),
(30, 'clients_delete_get', 'Eliminar Clientes', '', 'ClientController@getDelete', '2015-01-28 01:40:07', '2015-01-28 01:40:07', NULL),
(31, 'persons_view_get', 'Visualizar Personas', '', 'PersonController@getIndex', '2015-01-30 02:02:52', '2015-01-30 02:02:52', NULL),
(32, 'providers_view_get', 'Visualizar Proveedores', '', 'ProviderController@getIndex', '2015-01-30 02:04:24', '2015-01-30 02:07:04', NULL),
(33, 'locations_view_get', 'Visualizar Localidades', '', 'LocationController@getIndex', '2015-01-30 02:05:10', '2015-01-30 02:05:10', NULL),
(34, 'persons_create_get', 'Crear Personas', '', 'PersonController@getCreate', '2015-01-30 02:52:10', '2015-01-30 02:52:10', NULL),
(35, 'persons_edit_get', 'Editar Personas', '', 'PersonController@getEdit', '2015-01-30 02:52:49', '2015-01-30 02:52:49', NULL),
(36, 'persons_delete_get', 'Eliminar Personas', '', 'PersonController@getDelete', '2015-01-30 02:53:33', '2015-01-30 02:56:33', NULL),
(37, 'locations_create_get', 'Crear Localidades', '', 'LocationController@getCreate', '2015-01-30 02:54:36', '2015-01-30 02:54:36', NULL),
(38, 'locations_edit_get', 'Editar Localidades', '', 'LocationController@getEdit', '2015-01-30 02:55:07', '2015-01-30 02:55:07', NULL),
(39, 'locations_delete_get', 'Eliminar Localidades', '', 'LocationController@getDelete', '2015-01-30 02:55:38', '2015-01-30 02:56:00', NULL),
(40, 'providers_create_get', 'Crear Proveedores', '', 'ProviderController@getCreate', '2015-01-31 01:28:10', '2015-01-31 01:28:10', NULL),
(41, 'providers_edit_get', 'Editar Proveedores', '', 'ProviderController@getEdit', '2015-01-31 01:28:55', '2015-01-31 01:29:18', NULL),
(42, 'providers_delete_get', 'Eliminar Proveedores', '', 'ProviderController@getDelete', '2015-01-31 01:30:07', '2015-01-31 01:30:07', NULL),
(43, 'users_show_get', 'Visualizar Detalle de Usuario', '', 'UserController@getShow', '2015-01-31 04:47:03', '2015-01-31 04:47:03', NULL),
(44, 'projects_view_get', 'Visualizar Proyectos', '', 'ProjectController@getIndex', '2015-01-31 05:09:08', '2015-01-31 05:09:08', NULL),
(45, 'tasks_view_get', 'Visualizar Tareas', '', 'TaskController@getIndex', '2015-01-31 05:09:39', '2015-01-31 05:09:39', NULL),
(46, 'materials_view_get', 'Visualizar Materiales', '', 'MaterialController@getIndex', '2015-01-31 05:10:09', '2015-01-31 05:10:09', NULL),
(47, 'projects_create_get', 'Crear Proyectos', '', 'ProjectController@getCreate', '2015-01-31 05:32:32', '2015-01-31 05:32:32', NULL),
(48, 'projects_edit_get', 'Editar Proyectos', '', 'ProjectController@getEdit', '2015-01-31 05:32:53', '2015-01-31 05:32:53', NULL),
(49, 'projects_delete_get', 'Eliminar Proyectos', '', 'ProjectController@getDelete', '2015-01-31 05:33:42', '2015-01-31 05:33:42', NULL),
(50, 'payment_methods_view_get', 'Visualizar Metodos de Pago', '', 'PaymentMethodController@getIndex', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(51, 'invoice_accounts_view_get', 'Visualizar Cuentas de Facturación', '', 'InvoiceAccountController@getIndex', '2015-01-31 09:52:19', '2015-01-31 09:52:19', NULL),
(52, 'payment_methods_create_get', 'Crear Métodos de Pago', '', 'PaymentMethodController@getCreate', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(53, 'payment_methods_edit_get', 'Editar Métodos de Pago', '', 'PaymentMethodController@getEdit', '2015-01-31 10:45:14', '2015-01-31 10:45:14', NULL),
(54, 'payment_methods_delete_get', 'Eliminar Métodos de Pago', '', 'PaymentMethodController@getDelete', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL),
(55, 'invoice_accounts_create_get', 'Crear Cuentas de Facturación', '', 'InvoiceAccountController@getCreate', '2015-02-08 00:37:15', '2015-02-08 00:41:39', NULL),
(56, 'invoice_accounts_edit_get', 'Editar Cuentas de Facturación', '', 'InvoiceAccountController@getEdit', '2015-02-08 00:38:16', '2015-02-08 00:42:02', NULL),
(57, 'invoice_accounts_delete_get', 'Eliminar Cuentas de Facturación', '', 'InvoiceAccountController@getDelete', '2015-02-08 00:38:59', '2015-02-08 00:42:28', NULL),
(58, 'tasks_create_get', 'Crear Tareas', '', 'TaskController@getCreate', '2015-02-09 23:22:03', '2015-02-09 23:22:03', NULL),
(59, 'tasks_edit_get', 'Editar Tareas', '', 'TaskController@getEdit', '2015-02-09 23:22:39', '2015-02-09 23:22:39', NULL),
(60, 'tasks_delete_get', 'Eliminar Tareas', '', 'TaskController@getDelete', '2015-02-09 23:23:15', '2015-02-09 23:23:15', NULL),
(61, 'users_activate_get', 'Activación de Usuarios', '', 'UserController@getActivate', '2015-02-10 02:04:16', '2015-02-10 02:04:16', NULL),
(62, 'users_deactivate_get', 'Desactivar Usuarios', '', 'UserController@getDeactivate', '2015-02-10 02:05:17', '2015-02-10 02:05:17', NULL),
(63, 'my_tasks_view_get', 'Visualizar Mis Tareas', '', 'MyTaskController@getIndex', '2015-02-19 14:35:55', '2015-02-19 14:43:17', NULL),
(64, 'my_tasks_edit_get', 'Editar Mis Tareas', '', 'MyTaskController@getEdit', '2015-02-19 14:36:25', '2015-02-19 14:36:25', NULL),
(65, 'my_tasks_create_get', 'Crear Mis Tareas', '', 'MyTaskController@getCreate', '2015-02-19 14:36:55', '2015-02-19 14:36:55', NULL),
(66, 'my_tasks_delete_get', 'Eliminar Mis Tareas', '', 'MyTaskController@getDelete', '2015-02-19 14:37:30', '2015-02-19 14:37:30', NULL),
(67, 'roles_activate_get', 'Activar Roles', '', 'RoleController@getActivate', '2015-02-19 14:39:14', '2015-02-19 14:39:14', NULL),
(68, 'roles_deactivate_get', 'Desactivar Roles', '', 'RoleController@getDeactivate', '2015-02-19 14:39:39', '2015-02-19 14:39:39', NULL),
(69, 'my_tasks_show_get', 'Visualizar Detalle de Mis Tareas', '', 'MyTaskController@getShow', '2015-02-19 14:44:18', '2015-02-19 14:44:18', NULL),
(70, 'tasks_show_get', 'Visualizar Detalle de Tareas', '', 'TaskController@getShow', '2015-02-19 14:44:45', '2015-02-19 14:44:45', NULL),
(71, 'materials_create_get', 'Crear Materiales', '', 'MaterialController@getCreate', '2015-02-21 14:57:53', '2015-02-21 14:57:53', NULL),
(72, 'materials_edit_get', 'Editar Materiales', '', 'MaterialController@getEdit', '2015-02-21 15:03:34', '2015-02-21 15:03:34', NULL),
(73, 'materials_delete_get', 'Eliminar Materiales', '', 'MaterialController@getDelete', '2015-02-21 15:04:02', '2015-02-21 15:04:02', NULL),
(74, 'materials_assign_get', 'Asignar Materiales', '', 'MaterialController@getAssign', '2015-02-21 20:03:36', '2015-02-21 20:03:36', NULL),
(75, 'materials_unassign_get', 'Rehusar Material', '', 'MaterialController@getUnassign', '2015-02-21 20:04:00', '2015-02-21 20:04:00', NULL),
(76, 'materials_request_get', 'Solicitar Material', '', 'MaterialController@getRequest', '2015-02-21 22:20:45', '2015-02-21 22:20:45', NULL),
(77, 'requests_view_get', 'Visualizar Material Solicitado', '', 'RequestController@getIndex', '2015-02-21 22:21:46', '2015-02-21 23:07:09', NULL),
(78, 'requests_create_get', 'Crear Solicitud de Material', '', 'RequestController@getCreate', '2015-02-22 14:54:19', '2015-02-22 14:54:19', NULL),
(79, 'requests_edit_get', 'Editar Solicitud de Material', '', 'RequestController@getEdit', '2015-02-22 14:55:20', '2015-02-22 14:55:20', NULL),
(80, 'requests_delete_get', 'Eliminar Solicitud de Material', '', 'RequestController@getDelete', '2015-02-22 14:56:00', '2015-02-22 14:56:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Metales', 'Cabillas, Alambres, Láminas', 'stock', '', '2015-01-28 01:08:30', '2015-01-28 01:08:30', NULL),
(2, 'Maderas', 'Contrachapados', 'stock', '', '2015-01-28 01:10:37', '2015-01-28 01:10:37', NULL),
(3, 'Clavos', '', 'stock', '', '2015-01-28 01:13:32', '2015-01-28 01:13:32', NULL),
(4, 'Tornillos', '', 'stock', '', '2015-01-28 01:13:44', '2015-01-28 01:13:44', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `identification_number`, `email`, `phone`, `id_person`, `id_location`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Magicmedia', 'J405064943', 'magicmediave@gmail.com', '02432831372', 4, 2, '', '', '2015-01-31 05:00:15', '2015-01-31 05:00:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_authorized`
--

CREATE TABLE IF NOT EXISTS `client_authorized` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_conventions`
--

CREATE TABLE IF NOT EXISTS `client_conventions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_invoice_account` int(11) NOT NULL,
  `id_sale_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_accounts`
--

CREATE TABLE IF NOT EXISTS `invoice_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `header` longtext COLLATE utf8_unicode_ci NOT NULL,
  `footer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `invoice_accounts`
--

INSERT INTO `invoice_accounts` (`id`, `name`, `header`, `footer`, `image_url`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Banesco ', '													<p><img src="data:image/jpeg;base64,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" data-filename="WIN_20150125_184324.JPG" class="img-circle" style="line-height: 1.42857143; width: 25%;">&nbsp;<br></p><p><br></p>\r\n												', '																																						<table class="table table-bordered"><tbody><tr><td>Nombres</td><td>Apellidos</td></tr><tr><td>Alexis Anderson</td><td>Montenegro Reyes</td></tr><tr><td><br></td><td><br></td></tr></tbody></table>\r\n												\r\n												', '', 'Corriente', 'active', '2015-02-08 02:08:06', '2015-02-08 02:21:23', NULL);
INSERT INTO `invoice_accounts` (`id`, `name`, `header`, `footer`, `image_url`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Mercantil', '												', '												', '', 'Ahorro', 'inactive', '2015-02-08 02:22:28', '2015-02-08 02:24:32', '2015-02-08 02:24:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Maracay - La Romana', 'Sector La Romana', 'location', 'active', '2015-01-30 03:56:24', '2015-01-30 04:01:12', '2015-01-30 04:01:12'),
(2, 'Maracay - La Romana', 'Urbanización La Romana', 'location', 'active', '2015-01-31 01:37:46', '2015-01-31 01:37:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_stock` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `units` float(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `materials`
--

INSERT INTO `materials` (`id`, `id_stock`, `id_project`, `units`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 7, 150.00, '', 'assigned', '2015-02-21 18:11:52', '2015-02-21 21:34:49', NULL),
(2, 2, 7, 30.00, '', 'keeped', '2015-02-21 18:41:16', '2015-02-21 18:41:16', NULL),
(3, 4, 7, 14.00, '', 'keeped', '2015-02-21 19:05:12', '2015-02-21 19:52:21', '2015-02-21 19:52:21'),
(4, 5, 7, 20.00, '', 'keeped', '2015-02-21 19:17:27', '2015-02-21 19:17:27', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `measurement_units`
--

CREATE TABLE IF NOT EXISTS `measurement_units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `measurement_units`
--

INSERT INTO `measurement_units` (`id`, `name`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'Metros', 'm', '2015-01-28 01:06:36', '2015-01-28 01:06:36'),
(2, 'Centímetros', 'cm', '2015-01-28 01:07:07', '2015-01-28 01:07:07'),
(3, 'Kilogramos', 'kg', '2015-01-28 01:07:30', '2015-01-28 01:07:30'),
(4, 'Gramos', 'g', '2015-01-28 01:07:41', '2015-01-28 01:07:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_from` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_05_163122_create_clients_table', 1),
('2015_01_05_163259_create_client_authorized_table', 1),
('2015_01_05_163405_create_client_conventions_table', 1),
('2015_01_05_163431_create_persons_table', 1),
('2015_01_05_163457_create_locations_table', 1),
('2015_01_05_163534_create_sellers_table', 1),
('2015_01_05_163605_create_invoice_accounts_table', 1),
('2015_01_05_163630_create_invoices_table', 1),
('2015_01_05_163701_create_sale_orders_table', 1),
('2015_01_05_163732_create_receipts_table', 1),
('2015_01_05_163809_create_payment_methods_table', 1),
('2015_01_05_163843_create_purchase_orders_table', 1),
('2015_01_05_163915_create_projects_table', 1),
('2015_01_05_164022_create_materials_table', 1),
('2015_01_05_164052_create_stock_table', 1),
('2015_01_05_164140_create_measurement_units_table', 1),
('2015_01_05_164210_create_providers_table', 1),
('2015_01_05_164349_create_provider_invoices_table', 1),
('2015_01_05_164424_create_provider_items_table', 1),
('2015_01_05_164453_create_categories_table', 1),
('2015_01_05_212719_create_users_table', 1),
('2015_01_06_002911_create_roles_table', 1),
('2015_01_06_002951_create_capabilities_table', 1),
('2015_01_07_212659_create_options_table', 1),
('2015_01_07_212742_create_audits_table', 1),
('2015_01_07_212758_create_tasks_table', 1),
('2015_01_07_212823_create_messages_table', 1),
('2015_01_07_213423_create_role_capabilities_table', 1),
('2015_01_07_214401_create_user_tasks_table', 1),
('2015_01_07_225827_create_message_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_methods`
--

CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Crédito', 'Tarjeta de Crédito Bancario', 'payment_method', 'active', '2015-02-08 02:28:50', '2015-02-08 02:29:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `identification_number`, `email`, `phone`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alexis Anderson', 'Montenegro Reyes', 'V23498535', 'amontenegro.sistemas@gmail.com', '+584243134301', 'client_representant', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Yoselin Susana', 'Chacin Martínez', 'V24443306', 'susanaunefa@hotmail.com', '04241234567', 'person', 'active', '2015-01-28 04:03:10', '2015-01-30 03:39:34', '2015-01-30 03:39:34'),
(3, 'Antony Robert', 'Borges Dacorte', 'V18554560', 'robertdacorte@gmail.com', '04241234567', 'person', 'active', '2015-01-30 03:11:59', '2015-01-30 03:11:59', NULL),
(4, 'Fredo', 'Godofredo', 'V96385274', 'fredogodofredo@gmail.com', '04147894651', 'provider_representant', 'active', '2015-01-31 01:44:25', '2015-01-31 01:44:25', NULL),
(5, 'Hebber', 'McGubber', 'V14725836', 'hebbermcgubber@gmail.com', '02437418523', 'provider_representant', 'active', '2015-01-31 01:46:57', '2015-01-31 01:46:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `code`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'A000001', 'Primer Proyecto Editado', 'Esta es una descripción', '', 'active', '2015-02-08 06:03:46', '2015-02-09 19:17:01', '2015-02-09 19:17:01'),
(7, 'A000002', 'Segundo Proyecto', 'descripcion de proyecto', '', 'active', '2015-02-09 17:18:46', '2015-02-09 17:18:46', NULL),
(8, 'A000004', 'Tercer Proyecto', 'Esta es la descripcion del proyecto', '', 'active', '2015-02-16 16:58:58', '2015-02-16 16:58:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `identification_number`, `email`, `phone`, `id_person`, `id_location`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Parmalat', 'J1234567981', 'ventas@parmalat.com.ve', '02437654321', 5, 2, '', '', '2015-01-31 01:44:32', '2015-01-31 02:04:34', '2015-01-31 02:04:34'),
(2, 'Bimbo', 'J789456123', 'ventas@bimbo.com', '02431234567', 4, 2, '', '', '2015-01-31 02:03:04', '2015-01-31 02:03:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider_invoices`
--

CREATE TABLE IF NOT EXISTS `provider_invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider_items`
--

CREATE TABLE IF NOT EXISTS `provider_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `units` float(8,2) NOT NULL DEFAULT '0.00',
  `cost_per_unit` double(15,2) NOT NULL DEFAULT '0.00',
  `id_stock` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `provider_items`
--

INSERT INTO `provider_items` (`id`, `units`, `cost_per_unit`, `id_stock`, `id_project`, `id_purchase_order`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 10.00, 0.00, 2, 7, 0, 'request', 'inactive', '2015-02-21 21:58:59', '2015-02-22 15:13:34', NULL),
(3, 15.00, 0.00, 5, 0, 0, 'request', 'inactive', '2015-02-21 21:59:32', '2015-02-21 21:59:32', NULL),
(4, 10.00, 0.00, 5, 0, 0, 'request', 'inactive', '2015-02-21 22:10:37', '2015-02-21 22:10:37', NULL),
(5, 5.00, 0.00, 2, 0, 0, 'request', 'inactive', '2015-02-22 15:02:44', '2015-02-22 15:16:06', '2015-02-22 15:16:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_orders`
--

CREATE TABLE IF NOT EXISTS `purchase_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `id_provider` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receipts`
--

CREATE TABLE IF NOT EXISTS `receipts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `amount` float(16,2) NOT NULL,
  `id_sale_order` int(11) NOT NULL,
  `id_payment_method` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `receipts`
--

INSERT INTO `receipts` (`id`, `name`, `description`, `amount`, `id_sale_order`, `id_payment_method`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Adelanto de Proyecto', 'Adelanto para Proyecto: Primer Proyecto', 120000.00, 5, 2, 'advancement', 'active', '2015-02-08 06:03:46', '2015-02-09 19:17:01', '2015-02-09 19:17:01'),
(2, 'Adelanto de Proyecto', 'Adelanto para Proyecto: Segundo Proyecto', 230000.00, 6, 2, 'advancement', 'active', '2015-02-09 17:18:46', '2015-02-09 17:18:46', NULL),
(3, 'Adelanto de Proyecto', 'Adelanto para Proyecto: Tercer Proyecto', 50000.00, 7, 2, 'advancement', 'active', '2015-02-16 16:58:58', '2015-02-16 16:58:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin', 'Super Administrador', 'active', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(2, 'administrator', 'Administrador', 'active', '2015-01-31 04:43:40', '2015-01-31 04:43:40', NULL),
(3, 'seller', 'Vendedor', 'active', '2015-01-31 07:31:33', '2015-01-31 07:32:45', '2015-01-31 07:32:45'),
(4, 'seller', 'Vendedor', 'active', '2015-01-31 07:33:13', '2015-01-31 07:33:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_capabilities`
--

CREATE TABLE IF NOT EXISTS `role_capabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_capability` int(10) unsigned NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_capabilities_id_capability_index` (`id_capability`),
  KEY `role_capabilities_id_role_index` (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=127 ;

--
-- Volcado de datos para la tabla `role_capabilities`
--

INSERT INTO `role_capabilities` (`id`, `id_capability`, `id_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(2, 2, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(6, 6, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(7, 7, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(8, 8, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(9, 9, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(10, 10, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(11, 11, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(12, 12, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(13, 13, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(14, 14, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(16, 4, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(17, 5, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(18, 3, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(19, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(21, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(22, 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(23, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(24, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(25, 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(26, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(27, 24, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(28, 25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(29, 26, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(30, 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, 28, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(32, 29, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(33, 30, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, 27, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, 33, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(36, 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(37, 32, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(38, 37, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(39, 34, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(40, 38, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(41, 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(42, 39, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(43, 36, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(44, 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(45, 41, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(46, 42, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(47, 14, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(48, 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(49, 20, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(50, 28, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(51, 16, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(52, 37, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(53, 34, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(54, 40, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(55, 11, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(56, 24, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(57, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(58, 8, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(59, 21, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(60, 29, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(61, 38, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(62, 35, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(63, 41, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(64, 12, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(65, 17, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(66, 25, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(67, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(68, 9, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(69, 22, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(70, 30, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(71, 39, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(72, 36, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(73, 42, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(74, 13, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(75, 18, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(76, 26, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(77, 5, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(78, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(79, 19, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(80, 27, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(81, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(82, 33, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(83, 31, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(84, 32, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(85, 10, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(86, 15, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(87, 23, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(88, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(89, 43, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(90, 46, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(91, 44, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(92, 45, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(93, 47, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(94, 48, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(95, 49, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(96, 51, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(97, 50, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(98, 52, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(99, 53, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(100, 54, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(101, 55, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(102, 56, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(103, 57, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(104, 58, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(105, 59, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(106, 60, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(107, 61, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(108, 62, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(109, 65, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(110, 64, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(111, 66, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(112, 63, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(113, 67, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(114, 68, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(115, 69, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(116, 70, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(117, 71, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(118, 72, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(119, 73, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(120, 74, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(121, 75, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(122, 76, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(123, 77, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(124, 78, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(125, 79, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(126, 80, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_orders`
--

CREATE TABLE IF NOT EXISTS `sale_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `budget` double(15,2) NOT NULL,
  `period_days` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `sale_orders`
--

INSERT INTO `sale_orders` (`id`, `correlative`, `date`, `budget`, `period_days`, `id_client`, `id_seller`, `id_project`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '000123458', '1969-12-31', 850000.00, 100, 1, 3, 6, '', 'active', '2015-02-08 06:03:46', '2015-02-09 19:17:01', '2015-02-09 19:17:01'),
(6, '000123457', '2015-02-03', 1200000.00, 150, 1, 3, 7, '', 'active', '2015-02-09 17:18:46', '2015-02-16 17:03:03', NULL),
(7, '000123459', '2015-02-25', 120000.00, 50, 1, 3, 8, '', 'active', '2015-02-16 16:58:58', '2015-02-16 16:58:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_measurement_unit` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `units` float(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `name`, `description`, `id_measurement_unit`, `id_category`, `units`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clavos', '\r\n', 4, 3, 50.00, '2015-01-28 01:33:28', '2015-02-21 21:34:49', NULL),
(2, 'Cabilla 12"', '', 1, 1, 25.00, '2015-02-21 18:32:01', '2015-02-21 18:32:01', NULL),
(3, 'Lámina 25"', '', 3, 1, 40.00, '2015-02-21 18:32:45', '2015-02-21 18:32:45', NULL),
(4, 'Aceroli', '', 3, 1, 0.00, '2015-02-21 19:05:12', '2015-02-21 19:05:12', NULL),
(5, 'Tubos 5"', '', 1, 1, 0.00, '2015-02-21 19:17:27', '2015-02-22 15:14:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hours` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `hours`, `id_project`, `id_parent`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Inicio del Proyecto', 'Esta es la descripción de la tarea', 20, 7, 0, '', 'done', '2015-02-10 00:59:21', '2015-02-17 03:34:01', NULL);
INSERT INTO `tasks` (`id`, `name`, `description`, `hours`, `id_project`, `id_parent`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Finalizar Proyecto', '																										<p>													</p><img src="data:image/jpeg;base64,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" data-filename="529416_4172462120983_1872163083_n.jpg" style="width: 76.7833109017497px; height: 70px;" class="img-circle"><p><br></p><p><br></p><p>Descripcion del fin\r\n												</p>\r\n												\r\n												', 40, 7, 1, '', 'inactive', '2015-02-10 01:24:03', '2015-02-19 15:21:51', NULL);
INSERT INTO `tasks` (`id`, `name`, `description`, `hours`, `id_project`, `id_parent`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Media Tarea', 'Esta es la descripción de la tarea 2', 16, 7, 0, '', 'done', '2015-02-10 01:25:36', '2015-02-17 03:25:05', NULL),
(4, 'Tercera Tarea', 'Mini descripcion', 32, 7, 0, '', 'done', '2015-02-10 01:26:18', '2015-02-17 03:33:33', NULL),
(5, 'Tarea Hija', 'Esta es la descripción de la tarea hija', 64, 7, 1, '', 'inactive', '2015-02-10 01:30:21', '2015-02-10 01:30:21', NULL),
(6, 'Titulo', 'Descripcion', 6, 7, 1, '', 'done', '2015-02-16 17:46:50', '2015-02-19 15:51:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `displayname`, `email`, `password`, `id_role`, `status`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Alexis', 'Montenegro', 'AlexanderZon', 'Alexis Montenegro', 'amontenegro@magicmedia.com.ve', '$2y$10$n2GSpFQogYh6QitwvS/ycuN4xekWRUdhUmR9xIrngwDMuE1G5v.pS', 1, 'active', '2015-01-26 16:15:14', '2015-02-22 15:37:57', NULL, 'yV8vgbxnb8oHffzz4NRe1v2mMjzhlKO7TqgMw02mQMoDpp9qzjSGnu74zoGC'),
(2, 'Antony', 'Borges', 'robertdacorte', 'Antony Borges', 'aborges@magicmedia.com.ve', '$2y$10$yMFpcNzTAxDCmU3BN7ek8eNbsYoyIykTKT3EAp849KaMHxmHVGovq', 1, 'active', '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL, NULL),
(3, 'Daniel', 'Henriquez', 'henriquezdan', 'Daniel Henriquez', 'henriquezdan@gmail.com', '$2y$10$fSgh/p72I9AhgK54c6yLGOG/yuGkMiubb4ehTp39e1nUAtJG7Qw7S', 4, 'active', '2015-01-31 04:45:18', '2015-02-10 02:10:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_mesages`
--

CREATE TABLE IF NOT EXISTS `user_mesages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_message` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_mesages_id_message_index` (`id_message`),
  KEY `user_mesages_id_user_index` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_tasks`
--

CREATE TABLE IF NOT EXISTS `user_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `id_task` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_tasks_id_user_index` (`id_user`),
  KEY `user_tasks_id_task_index` (`id_task`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `user_tasks`
--

INSERT INTO `user_tasks` (`id`, `id_user`, `id_task`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(6, 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(8, 3, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(9, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(10, 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(11, 3, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(12, 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_capabilities`
--
ALTER TABLE `role_capabilities`
  ADD CONSTRAINT `role_capabilities_id_capability_foreign` FOREIGN KEY (`id_capability`) REFERENCES `capabilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_capabilities_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_mesages`
--
ALTER TABLE `user_mesages`
  ADD CONSTRAINT `user_mesages_id_message_foreign` FOREIGN KEY (`id_message`) REFERENCES `messages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_mesages_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_tasks`
--
ALTER TABLE `user_tasks`
  ADD CONSTRAINT `user_tasks_id_task_foreign` FOREIGN KEY (`id_task`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_tasks_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
