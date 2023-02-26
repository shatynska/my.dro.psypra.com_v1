import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, useForm } from '@inertiajs/react';
import useRoute from '@/Hooks/useRoute';

interface ForgotPasswordProps {
    status: string;
}

export default function ForgotPassword({ status }: ForgotPasswordProps) {
    const route = useRoute();
    const { data, setData, post, processing, errors } = useForm({
        email: '',
    });

    const onChange = (event: { target: { name: any; value: any } }) => {
        setData(event.target.name, event.target.value);
    };

    const submit = (e: { preventDefault: () => void }) => {
        e.preventDefault();
        post('/forgot-password');
    };

    return (
        <>
            <Head title='Forgot Password' />

            <div className='mb-4 text-sm leading-normal text-slate-500'>
                Forgot your password? No problem. Just let us know your email address and we will email you a password
                reset link that will allow you to choose a new one.
            </div>

            {status && <div className='mb-4 text-sm font-medium text-green-600'>{status}</div>}

            <form onSubmit={submit}>
                <TextInput type='text' name='email' value={data.email} autoFocus onChange={onChange} />

                <InputError message={errors.email} className='mt-2' />

                <div className='mt-4 flex items-center justify-end'>
                    <PrimaryButton type='submit' className='ml-4' disabled={processing}>
                        Email Password Reset Link
                    </PrimaryButton>
                </div>
            </form>
        </>
    );
}

ForgotPassword.layout = (page: any) => <GuestLayout children={page} />;
