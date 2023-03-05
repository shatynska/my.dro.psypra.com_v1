import { ReactNode } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';
import useRoute from '@/Hooks/useRoute';

interface GuestLayoutProps {
    children: ReactNode;
    header?: string | null;
    description?: string | ReactNode | null;
}

export default function Guest({ description = null, header = null, children }: GuestLayoutProps) {
    const route = useRoute();
    return (
        <div className='flex min-h-screen flex-col items-center bg-slate-100 pt-6 sm:justify-center sm:pt-0'>
            <div className='sm:mx-auto sm:w-full sm:max-w-md'>
                <Link href={route('main')}>
                    <ApplicationLogo className='mx-auto w-12 h-auto invert opacity-90' />
                </Link>
                {header !== null && (
                    <h2 className='mt-6 text-center text-3xl font-bold tracking-tight text-slate-900'>{header}</h2>
                )}
                {description !== null && <p className='mt-2 text-center text-sm text-slate-600'>{description}</p>}
            </div>

            <div className='mt-6 w-full overflow-hidden bg-white px-6 py-8 shadow-md sm:max-w-md sm:rounded-lg'>
                {children}
            </div>
        </div>
    );
}
