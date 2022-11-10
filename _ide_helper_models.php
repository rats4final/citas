<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Historial
 *
 * @property int $id_historial
 * @property string $fecha_historial
 * @property string $detalles_historial
 * @property int $id_persona
 * @property int $id_sede
 * @property int $id_medico
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Historial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereDetallesHistorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereFechaHistorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereIdHistorial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereIdMedico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereIdPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereIdSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historial whereUpdatedAt($value)
 */
	class Historial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patologia
 *
 * @property int $id_patologia
 * @property string $nombre_patologia
 * @property string $detalle_patologia
 * @property int $id_tip_patologia
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TipoPatologia $tipo_patologia
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereDetallePatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereIdPatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereIdTipPatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereNombrePatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patologia whereUpdatedAt($value)
 */
	class Patologia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Persona
 *
 * @property int $id_persona
 * @property string $nombre_per
 * @property string $apellido_pa_per
 * @property string $apellido_ma_per
 * @property int $ci_per
 * @property int $cel_per
 * @property string $fecha_nac
 * @property string|null $num_seguro
 * @property int $donante
 * @property int $id_tipo_sangre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona query()
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereApellidoMaPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereApellidoPaPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereCelPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereCiPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereDonante($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereFechaNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereIdPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereIdTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereNombrePer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereNumSeguro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Persona whereUpdatedAt($value)
 */
	class Persona extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sede
 *
 * @property int $id_sede
 * @property string $nombre_sede
 * @property string $direccion_sede
 * @property string $telefono_sede
 * @property string $ciudad_sede
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sede newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sede newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sede query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereCiudadSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereDireccionSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereIdSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereNombreSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereTelefonoSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sede whereUpdatedAt($value)
 */
	class Sede extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TipoPatologia
 *
 * @property int $id_tip_patologia
 * @property string $nombre_patologia
 * @property string $desc_patologia
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia query()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia whereDescPatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia whereIdTipPatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia whereNombrePatologia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoPatologia whereUpdatedAt($value)
 */
	class TipoPatologia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TipoRelacion
 *
 * @property int $id_tip_rel
 * @property string $relacion_tip_rel
 * @property int $id_persona
 * @property int $id_pariente
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion query()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereIdPariente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereIdPersona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereIdTipRel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereRelacionTipRel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoRelacion whereUpdatedAt($value)
 */
	class TipoRelacion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TipoSangre
 *
 * @property int $id_tipo_sangre
 * @property string $nombre_tipo_sangre
 * @property string|null $descripcion_tipo_sangre
 * @property string $rareza_tipo_sangre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre query()
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereDescripcionTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereIdTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereNombreTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereRarezaTipoSangre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TipoSangre whereUpdatedAt($value)
 */
	class TipoSangre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string|null $estado
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

